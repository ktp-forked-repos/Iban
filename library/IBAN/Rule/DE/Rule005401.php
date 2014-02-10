<?php
/**
 * Iban
 *
 * @author      Jan Schaedlich <schaedlich.jan@gmail.com>
 * @copyright   2013 Jan Schaedlich
 * @link        https://github.com/jschaedl/Iban
 *
 * MIT LICENSE
 */
namespace IBAN\Rule\DE;

class Rule005401 extends \IBAN\Rule\DE\Rule000000
{
    protected $bankAccountSubstitutions = array(
        "500" => "500500"
        , "502" => "502502"
        , "18067" => "180670"
        , "484848" => "484849"
        , "636306" => "63606"
        , "760440" => "160440"
        , "1018413" => "10108413"
        , "2601577" => "26015776"
        , "5005000" => "500500"
        , "10796740" => "10796743"
        , "11796740" => "11796743"
        , "12796740" => "12796743"
        , "13796740" => "13796743"
        , "14796740" => "14796743"
        , "15796740" => "15796743"
        , "16307000" => "163107000"
        , "16610700" => "166107000"
        , "16796740" => "16796743"
        , "17796740" => "17796743"
        , "18796740" => "18796743"
        , "19796740" => "19796743"
        , "20796740" => "20796743"
        , "21796740" => "21796743"
        , "22796740" => "22796743"
        , "23796740" => "23796743"
        , "24796740" => "24796743"
        , "25796740" => "25796743"
        , "26610700" => "266107000"
        , "26796740" => "26796743"
        , "27796740" => "27796743"
        , "28796740" => "28796743"
        , "29796740" => "29796743"
        , "45796740" => "45796743"
        , "50796740" => "50796743"
        , "51796740" => "51796743"
        , "52796740" => "52796743"
        , "53796740" => "53796743"
        , "54796740" => "54796743"
        , "55796740" => "55796743"
        , "56796740" => "56796743"
        , "57796740" => "57796743"
        , "58796740" => "58796743"
        , "59796740" => "59796743"
        , "60796740" => "60796743"
        , "61796740" => "61796743"
        , "62796740" => "62796743"
        , "63796740" => "63796743"
        , "64796740" => "64796743"
        , "65796740" => "65796743"
        , "66796740" => "66796743"
        , "67796740" => "67796743"
        , "68796740" => "68796743"
        , "69796740" => "69796743"
        , "1761070000" => "176107000"
        , "2210531180" => "201053180"
    );

    public function generateIban()
    {
        $allowedBankAccountNumbers = array(
            624044 => "DE96210602370000624044",
            4063060 => "DE11210602370004063060",
            20111908 => "DE97210602370020111908",
            20211908 => "DE92210602370020211908",
            20311908 => "DE87210602370020311908",
            20411908 => "DE82210602370020411908",
            20511908 => "DE77210602370020511908",
            20611908 => "DE72210602370020611908",
            20711908 => "DE67210602370020711908",
            20811908 => "DE62210602370020811908",
            20911908 => "DE57210602370020911908",
            21111908 => "DE47210602370021111908",
            21211908 => "DE42210602370021211908",
            21311908 => "DE37210602370021311908",
            21411908 => "DE32210602370021411908",
            21511908 => "DE27210602370021511908",
            21611908 => "DE22210602370021611908",
            21711908 => "DE17210602370021711908",
            21811908 => "DE12210602370021811908",
            21911908 => "DE07210602370021911908",
            22111908 => "DE94210602370022111908",
            22211908 => "DE89210602370022211908",
            22311908 => "DE84210602370022311908",
            22411908 => "DE79210602370022411908",
            22511908 => "DE74210602370022511908",
            22611908 => "DE69210602370022611908",
            46211991 => "DE43210602370046211991",
            50111908 => "DE52210602370050111908",
            50211908 => "DE47210602370050211908",
            50311908 => "DE42210602370050311908",
            50411908 => "DE37210602370050411908",
            50511908 => "DE32210602370050511908",
            50611908 => "DE27210602370050611908",
            50711908 => "DE22210602370050711908",
            50811908 => "DE17210602370050811908",
            50911908 => "DE12210602370050911908",
            51111908 => "DE02210602370051111908",
            51111991 => "DE89210602370051111991",
            51211908 => "DE94210602370051211908",
            51211991 => "DE84210602370051211991",
            51311908 => "DE89210602370051311908",
            51411908 => "DE84210602370051411908",
            51511908 => "DE79210602370051511908",
            51611908 => "DE74210602370051611908",
            51711908 => "DE69210602370051711908",
            51811908 => "DE64210602370051811908",
            51911908 => "DE59210602370051911908",
            52111908 => "DE49210602370052111908",
            52111991 => "DE39210602370052111991",
            52211908 => "DE44210602370052211908",
            52211991 => "DE34210602370052211991",
            52311908 => "DE39210602370052311908",
            52411908 => "DE34210602370052411908",
            52511908 => "DE29210602370052511908",
            52611908 => "DE24210602370052611908",
            52711908 => "DE19210602370052711908",
            52811908 => "DE14210602370052811908",
            52911908 => "DE09210602370052911908",
            53111908 => "DE96210602370053111908",
            53211908 => "DE91210602370053211908",
            53311908 => "DE86210602370053311908",
            57111908 => "DE90210602370057111908",
            58111908 => "DE40210602370058111908",
            58211908 => "DE35210602370058211908",
            58311908 => "DE30210602370058311908",
            58411908 => "DE25210602370058411908",
            58511908 => "DE20210602370058511908",
            80111908 => "DE07210602370080111908",
            80211908 => "DE02210602370080211908",
            80311908 => "DE94210602370080311908",
            80411908 => "DE89210602370080411908",
            80511908 => "DE84210602370080511908",
            80611908 => "DE79210602370080611908",
            80711908 => "DE74210602370080711908",
            80811908 => "DE69210602370080811908",
            80911908 => "DE64210602370080911908",
            81111908 => "DE54210602370081111908",
            81211908 => "DE49210602370081211908",
            81311908 => "DE44210602370081311908",
            81411908 => "DE39210602370081411908",
            81511908 => "DE34210602370081511908",
            81611908 => "DE29210602370081611908",
            81711908 => "DE24210602370081711908",
            81811908 => "DE19210602370081811908",
            81911908 => "DE14210602370081911908",
            82111908 => "DE04210602370082111908",
            82211908 => "DE96210602370082211908",
            82311908 => "DE91210602370082311908",
            82411908 => "DE86210602370082411908",
            82511908 => "DE81210602370082511908",
            82611908 => "DE76210602370082611908",
            82711908 => "DE71210602370082711908",
            82811908 => "DE66210602370082811908",
            82911908 => "DE61210602370082911908",
            99624044 => "DE93210602370099624044",
            300143869 => "DE30210602370300143869",
        );

        $bankAccountNumber = (int) $this->bankAccountNumber;
        if (isset($allowedBankAccountNumbers[$bankAccountNumber])) {
            return $allowedBankAccountNumbers[$bankAccountNumber];
        }

        return parent::generateIban();
    }
}

