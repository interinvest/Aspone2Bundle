<?php
/**
 * Created by PhpStorm.
 * User: bmari
 * Date: 05/07/2017
 * Time: 14:41
 */

namespace InterInvest\Aspone2Bundle\Services;


/**
 * Class Monitoring
 */
class Monitoring
{

    public function getDeclarationDetailsResponse($response)
    {
        $resp = new \DOMDocument('1.0', 'utf-8');
        $resp->loadXML($response);

        $XMLresults = $resp->getElementsByTagName("wsResponse");
        if (strpos($XMLresults->item(0)->nodeValue, 'ERROR') === 0) {
            return false;
        }
        $xmlHistos = $resp->getElementsByTagName("stateHistory");
        $final = array();
        if ($resp->getElementsByTagName('rofDeclared')->length) {
            $final['infos'] = array(
                'depositId'      => $resp->getElementsByTagName('depositId')->item(0)->nodeValue,
                'declarantSiren' => $resp->getElementsByTagName('declarantSiren')->item(0)->nodeValue,
                'periodeStart'   => $resp->getElementsByTagName('periodStart')->item(0)->nodeValue,
                'periodeEnd'     => $resp->getElementsByTagName('periodEnd')->item(0)->nodeValue,
                'identifiant'    => $resp->getElementsByTagName('declarationId')->item(0)->nodeValue,
                'type'           => $resp->getElementsByTagName('code')->item(0)->nodeValue,
                'referenceClient' => $resp->getElementsByTagName('referenceClient')->item(0) ? $resp->getElementsByTagName('referenceClient')->item(0)->nodeValue : ''
            );
        }
        $formulaires = array();
        if ($resp->getElementsByTagName('fiscalForm')->length) {
            for ($i = 0; $i < $resp->getElementsByTagName('fiscalForm')->length; $i++) {
                $name = $resp->getElementsByTagName('fiscalForm')->item($i)->firstChild->textContent;
                if (!strpos($name, 'IDENTIF')) {
                    $formulaires[] = $name;
                }
            }
        }
        sort($formulaires);
        $final['infos']['formulaires'] = implode(',', $formulaires);
        for ($i = 0; $i < $xmlHistos->length; $i++ ) {
            $children = $xmlHistos->item($i)->childNodes;
            foreach ($children as $child) {
                if ($child->nodeName != 'stateDetailsHistory') {
                    if (in_array($child->nodeName, array('isError', 'isFinal'))) {
                        $histo[$child->nodeName] = $child->nodeValue == 'true' ? 1 : 0;
                    } else {
                        $histo[$child->nodeName] = $child->nodeValue;
                    }
                }
            }
            $histo['detail'] = $this->extraitDetails($xmlHistos->item($i)->lastChild);
            $final['historiques'][$i] = $histo;
        }
        return $final;
    }


    public function getDepositInformations($reponseSoap)
    {

        $resp = new \DOMDocument('1.0', 'utf-8');
        $resp->loadXML($reponseSoap);

        $XMLresults = $resp->getElementsByTagName("wsResponse");
        if ($resp->getElementsByTagName("responseType")->item(0)->textContent == 'ERROR') {
            return false;
        }
        $xmlHistos = $resp->getElementsByTagName("stateHistory");
        $final = array();
        $xmlNames = $resp->getElementsByTagName("name");
        $xmlLabels = $resp->getElementsByTagName("label");
        $xmlErrors = $resp->getElementsByTagName("isError");
        $xmlFinals = $resp->getElementsByTagName("isFinal");
        $xmlDates = $resp->getElementsByTagName("date");
        for ($i = 0; $i < $xmlHistos->length; $i++ ) {
            $histo['name'] = $xmlNames->item($i+1)->nodeValue; //+1 car premiere node "name" correspond au compte qui a créé l'interchange
            $histo['label'] = $xmlLabels->item($i)->nodeValue;
            $histo['isError'] = $xmlErrors->item($i)->nodeValue == 'true' ? 1 : 0;
            $histo['isFinal'] = $xmlFinals->item($i)->nodeValue == 'true' ? 1 : 0;
            $histo['date'] = $xmlDates->item($i)->nodeValue;
            $histo['detail'] = $this->extraitDetails($xmlHistos->item($i)->lastChild);
            $final['historiques'][$i] = $histo;
        }
        //set des ids declarations
        $final['declarations'] = [];
        foreach($resp->getElementsByTagName("declarationId") as $idDeclaration){
            $final['declarations'][] = $idDeclaration->textContent;
        }
        $final['numADS'] = $resp->getElementsByTagName("numADS")->item(0) ? $resp->getElementsByTagName("numADS")->item(0)->nodeValue : 0;
        $final['interchangeId'] = $resp->getElementsByTagName("interchangeId")->item(0) ? $resp->getElementsByTagName("interchangeId")->item(0)->nodeValue : 0;
        return $final;
    }


    private function extraitDetails($resp)
    {
        if (!$resp) {
            return array();
        }
        $final = array();
        $xmlNames = $resp->getElementsByTagName("name");
        $xmlLabels = $resp->getElementsByTagName("label");
        $xmlDetailLabels = $resp->getElementsByTagName("detailledLabel");
        $xmlErrors = $resp->getElementsByTagName("isError");
        $xmlFinals = $resp->getElementsByTagName("isFinal");
        $xmlDates = $resp->getElementsByTagName("date");
        for ($i = 0; $i < $xmlNames->length; $i++ ) {
            $histo['name'] = $xmlNames->item($i)->nodeValue;
            $histo['label'] = $xmlLabels->item($i)->nodeValue;
            if ($xmlDetailLabels->item($i)) {
                $histo['detailledlabel'] = $xmlDetailLabels->item($i)->nodeValue;
                if (preg_match('/[c|C]ode [e|E]rreur.{1,3}\(?([0-9]{3,7})\)?/', $xmlDetailLabels->item($i)->nodeValue, $matches)) {
                    $histo['codeErreur'] = $matches[1];
                }
            }
            $histo['isError'] = $xmlErrors->item($i)->nodeValue == 'true' ? 1 : 0;
            $histo['isFinal'] = $xmlFinals->item($i)->nodeValue == 'true' ? 1 : 0;
            $histo['date'] = $xmlDates->item($i)->nodeValue;
            $final[$i] = $histo;
        }
        return $final;
    }
}
