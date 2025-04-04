<?php

use Conjugation\Noun;
use PHPUnit\Framework\TestCase;

class NounTest extends TestCase
{
    public function testBasicGenitives()
    {
        $testSet = [
            "auringonsäde" => "auringonsäteen",
            "säde" => "säteen",
            "tee" => "teen",
            "college" => "collegen",
            "pahe" => "paheen",
            "tie" => "tien",
            "ohje" => "ohjeen",
            "lomake" => "lomakkeen",
            "suihke" => "suihkeen",
            "leike" => "leikkeen",
            "nukke" => "nuken",
            "välke" => "välkkeen",
            "eläke" => "eläkkeen",
            "roikale" => "roikaleen",
            "viipale" => "viipaleen",
            "käärme" => "käärmeen",
            "kuume" => "kuumeen",
            "aine" => "aineen",
            "huone" => "huoneen",
            "ripe" => "rippeen",
            "vire" => "vireen",
            "tuore" => "tuoreen",
            "piirre" => "piirteen",
            "murre" => "murteen",
            "liete" => "lietteen",
            "laite" => "laitteen",
            "peite" => "peitteen",
            "jännite" => "jännitteen",
            "polte" => "poltteen",
            "painiote" => "painiotteen",
            "rokote" => "rokotteen",
            "tuote" => "tuotteen",
            "raaste" => "raasteen",
            "raglette" => "ragleten",
            "palaute" => "palautteen",
            "kuorrute" => "kuorrutteen",
            "saaste" => "saasteen",
            "pakaste" => "pakasteen",
            "neste" => "nesteen",
            "paiste" => "paisteen",
            "sumute" => "sumutteen",
            "puute" => "puutteen",
            "näyte" => "näytteen",
            "jäte" => "jätteen",
            "poikue" => "poikueen",
            "joukkue" => "joukkueen",
            "puolue" => "puolueen",
            "kiertue" => "kiertueen",
            "tarve" => "tarpeen",
            "terve" => "terveen",
            "turve" => "turpeen",
            "yhtye" => "yhtyeen",
            "säe" => "säkeen",
            "huume" => "huumeen",
            "amme" => "ammeen",
            "nalle" => "nallen",
            "kanne" => "kanteen",
            "puriste" => "puristeen",
            "joule" => "joulen",
            "lude" => "luteen",
            "tilanne" => "tilanteen",
            "koe" => "kokeen",
            "aie" => "aikeen",
            "tae" => "takeen",
            "lakka" => "lakan",
            "käpy" => "kävyn",
            "kippo" => "kipon",
            "matto" => "maton",
            "reki" => "reen",
            "lupa" => "luvan",
            "pato" => "padon",
            "hanki" => "hangen",
            "pelto" => "pellon",
            "ranta" => "rannan",
            "parta" => "parran",
            "kylki" => "kyljen",
            "arki" => "arjen",
            "sisin" => "sisimen",
            "tosi" => "toden",
            "biisi" => "biisin",
            "lasi" => "lasin",
            "susi" => "suden",
            "käsi" => "käden",
            "vesi" => "veden",
            "aloite" => "aloitteen",
            "pilkahdus" => "pilkahduksen",
            "silakka" => "silakan",
            "tunneli" => "tunnelin",
            "lammas" => "lampaan",
            "tiede" => "tieteen",
            "kudos" => "kudoksen",
            "liikenne" => "liikenteen",
            "tehdas" => "tehtaan",
            "ahdas" => "ahtaan",
            "ohjaus" => "ohjauksen",
            "ohjus" => "ohjuksen",
            "tunti" => "tunnin",
            "panta" => "pannan",
            "kyntö" => "kynnön",
            "lintu" => "linnun",
            "teos" => "teoksen",
            "pöytä" => "pöydän",
            "puku" => "puvun",
            "laku" => "lakun",
            "luku" => "luvun",
            "rakennus" => "rakennuksen",
            "sulatus" => "sulatuksen",
            "vuosi" => "vuoden",
            "suotavuus" => "suotavuuden",
            "väsymys" => "väsymyksen",
            "toppaus" => "toppauksen",
            "suopa" => "suovan",
            "pappa" => "papan",
            "haapa" => "haavan",
            "peräsuolisyöpä" => "peräsuolisyövän",
            "mätä" => "mädän",
            "kide" => "kiteen",
            "kanta" => "kannan",
            "sammal" => "sammalen",
            "toiminta" => "toiminnan",
            "puhallin" => "puhaltimen",
            "kulu" => "kulun",
            "valas" => "valaan",
            "jauhe" => "jauheen",
            "pönttö" => "pöntön",
            "puhe" => "puheen",
            "teroitin" => "teroittimen",
            "rakas" => "rakkaan",
            "sormikas" => "sormikkaan",
            "kaunis" => "kauniin",
            "retki" => "retken",
            "muhennos" => "muhennoksen",
            "onki" => "ongen",
            "tikas" => "tikkaan",
            "henki" => "hengen",
            "pyörre" => "pyörteen",
            "luomi" => "luomen",
            "lihas" => "lihaksen",
            "liike" => "liikkeen",
            "ostos" => "ostoksen",
            "kierto" => "kierron",
            "suhde" => "suhteen",
            "lähde" => "lähteen",
            "esikisa" => "esikisan",
            "louhos" => "louhoksen",
            "kone" => "koneen",
            "mekko" => "mekon",
            "kylpy" => "kylvyn",
            "taito" => "taidon",
            "tauti" => "taudin",
            "mestaruus" => "mestaruuden",
            "piste" => "pisteen",
            "kiusaus" => "kiusauksen",
            "runsaus" => "runsauden",
            "epätarkkuus" => "epätarkkuuden",
            "pihti" => "pihdin",
            "kuukausi" => "kuukauden",
            "lehti" => "lehden",
            "kertomus" => "kertomuksen",
            "kasvain" => "kasvaimen",
            "huopa" => "huovan",
            "vanki" => "vangin",
            "oikeus" => "oikeuden",
            "huolto" => "huollon",
            "kaulus" => "kauluksen",
            "alue" => "alueen",
            "kirjallisuus" => "kirjallisuuden",
            "mieli" => "mielen",
            "lanka" => "langan",
            "peräpeili" => "peräpeilin",
            "rampa" => "ramman",
            "valotiheys" => "valotiheyden",
            "tasapeli" => "tasapelin",
            "rinne" => "rinteen",
            "liikerata" => "liikeradan",
            "lähtö" => "lähdön",
            "onnettomuus" => "onnettomuuden",
            "määräys" => "määräyksen",
            "sumutin" => "sumuttimen",
            "hedelmä" => "hedelmän",
            "kupu" => "kuvun",
            "talous" => "talouden",
            "koti" => "kodin",
            "rakkaus" => "rakkauden",
            "ääni" => "äänen",
            "liikenneneuvos" => "liikenneneuvoksen",
            "olo" => "olon",
            "herttuatar" => "herttuattaren",
            "kyky" => "kyvyn",
            "tuuli" => "tuulen",
            "kuponki" => "kupongin",
            "toimi" => "toimen",
            "sairaus" => "sairauden",
            "vierus" => "vieruksen",
            "opas" => "oppaan",
            "piiras" => "piiraan",
            "kiihtyvyys" => "kiihtyvyyden",
            "suuruus" => "suuruuden",
            "kokous" => "kokouksen",
            "kuitu" => "kuidun",
            "poika" => "pojan",
            "barbaari" => "barbaarin",
            "ommel" => "ompelen",
            "johto" => "johdon",
            "kohtu" => "kohdun",
            "kivi" => "kiven",
            "joukko" => "joukon",
            "silta" => "sillan",
            "purkaus" => "purkauksen",
            "raikas" => "raikkaan",
            "teko" => "teon",
            "lampi" => "lammen",
            "rako" => "raon",
            "rikos" => "rikoksen",
            "köysi" => "köyden",
            "bisnes" => "bisneksen",
            "asia" => "asian",
            "siemen" => "siemenen",
            "stadion" => "stadionin",
            "lapsi" => "lapsen",
            "porsas" => "porsaan",
            "vuotias" => "vuotiaan",
            "pylväs" => "pylvään",
            "kansi" => "kannen",
            "veitsi" => "veitsen",
            "aika" => "ajan",
            "sieni" => "sienen",
            "olosuhde" => "olosuhteen",
            "yhteys" => "yhteyden",
            "päälys" => "päälyksen",
            "lääke" => "lääkkeen",
            "naulittu" => "naulitun",
            "metsä" => "metsän",
            "kärsäkäs" => "kärsäkkään",
            "näkö" => "näön",
            "juoni" => "juonen",
            "taklaus" => "taklauksen",
            "löytö" => "löydön",
            "ranneote" => "ranneotteen",
            "kvartsi" => "kvartsin",
            "vaunu" => "vaunun",
            "vaate" => "vaatteen",
            "vapaus" => "vapauden",
            "uni" => "unen",
            "kota" => "kodan",
            "virtaus" => "virtauksen",
            "tulos" => "tuloksen",
            "markkina" => "markkinan",
            "teräs" => "teräksen",
            "vaaka" => "vaa'an",
            "energia" => "energian",
            "kerääjä" => "kerääjän",
            "lämmitys" => "lämmityksen",
            "koru" => "korun",
            "kukka" => "kukan",
            "väki" => "väen",
            "viikko" => "viikon",
            "kyljys" => "kyljyksen",
            "enemmistö" => "enemmistön",
            "kori" => "korin",
            "lehdistö" => "lehdistön",
            "pommi" => "pommin",
            "turismi" => "turismin",
            "leikkaus" => "leikkauksen",
            "tarjous" => "tarjouksen",
            "hinta" => "hinnan",
            "kunta" => "kunnan",
            "apila" => "apilan",
            "istuin" => "istuimen",
            "betoni" => "betonin",
            "kolari" => "kolarin",
            "usko" => "uskon",
            "rauhanen" => "rauhasen",
            "rotu" => "rodun",
            "kätkö" => "kätkön",
            "summeri" => "summerin",
            "pieni" => "pienen",
            "kilpi" => "kilven",
            "näyttelyvieras" => "näyttelyvieraan",
            "tekniikka" => "tekniikan",
            "ovi" => "oven",
            "alusta" => "alustan",
            "kortisoni" => "kortisonin",
            "riita" => "riidan",
            "mitta" => "mitan",
            "seutu" => "seudun",
            "yhdistetty" => "yhdistetyn",
            "sähkö" => "sähkön",
            "käytäväpolitiikka" => "käytäväpolitiikan",
            "säkkituoli" => "säkkituolin",
            "torni" => "tornin",
            "leikki" => "leikin",
            "kypsennys" => "kypsennyksen",
            "muovi" => "muovin",
            "pakkaus" => "pakkauksen",
            "doping" => "dopingin",
            "raskas" => "raskaan",
            "myrkky" => "myrkyn",
            "tähti" => "tähden",
            "lyhty" => "lyhdyn",
            "suihku" => "suihkun",
            "insuliini" => "insuliinin",
            "hyppy" => "hypyn",
            "kinkku" => "kinkun",
            "kieli" => "kielen",
            "ranskan kieli" => "ranskan kielen",
            "keskus" => "keskuksen",
            "pysähdys" => "pysähdyksen",
            "bakteeri" => "bakteerin",
            "ananas" => "ananaksen",
            "purukumi" => "purukumin",
            "tyyppi" => "tyypin",
            "komitea" => "komitean",
            "härkä" => "härän",
            "sarja" => "sarjan",
            "lainoppi" => "lainopin",
            "pouta" => "poudan",
            "tulppaani" => "tulppaanin",
            "purje" => "purjeen",
            "peluri" => "pelurin",
            "tieto" => "tiedon",
            "myrsky" => "myrskyn",
            "muoto" => "muodon",
            "raskaus" => "raskauden",
            "selkä" => "selän",
            "halko" => "halon",
            "naamari" => "naamarin",
            "substantiivi" => "substantiivin",
            "viski" => "viskin",
            "ruisku" => "ruiskun",
            "ase" => "aseen",
            "sotilas" => "sotilaan",
            "koneisto" => "koneiston",
            "leipä" => "leivän",
            "karmi" => "karmin",
            "povinen" => "povisen",
            "verhoilu" => "verhoilun",
            "lupaus" => "lupauksen",
            "terrieri" => "terrierin",
            "muuri" => "muurin",
            "tuuri" => "tuurin",
            "loosi" => "loosin",
            "filmi" => "filmin",
            "mittari" => "mittarin",
            "järvi" => "järven",
            "medaljonki" => "medaljongin",
            "nivel" => "nivelen",
            "seksi" => "seksin",
            "outo" => "oudon",
            "tapaus" => "tapauksen",
            "utare" => "utaren",
            "alaston" => "alastoman",
            "elin" => "elimen",
            "vehje" => "vehkeen",
//            "kestit" => "kestien",
//             "kaksisataa" => "kahdensadan",
//             "pöksyt" => "pöksyjen",
//            "kumpi" => "kumman",
//             "tanssit" => "tanssien",
//            "kampi" => "kammen",
            //     "viive" => "viipeen",
        ];

        // initialize and use cache
        $noun = new Noun();

        foreach ($testSet as $word => $correct_answer) {
            $actual = $noun->inflectWord($word, "genetiivi");
            $this->assertEquals($correct_answer, $actual);
            $actual = $noun->inflectWord($word, "nominatiivi");
            $this->assertEquals($word, $actual);
        }
    }
}
