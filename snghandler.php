<?php
/**
 * An immaginative class. You can immagine a DB interface instead or what you want
 *
 * @author sergio <jsonrpcphp@inservibile.org>
 */
class SngHandler {
	/**
	 * An immaginative array of data
	 *
	 * @var array
	 */
	private $someData = array (
							'name' => 'Some Proper Name',
							'attr' => 'Some Personal Attribute'
							);

	/**
	 * An immaginative private method.
	 * Since it is a private method, it WILL NOT be served as RPC.
	 * curl -H "Content-type: application/json" -X POST -d ' {"method": "login", "params": {"user": "snguser", "password": "sngpassword"}, "id": 1}' http://5.175.186.227/sngserver.php
	 * @param integer $min
	 * @param integer $max
	 * @return integer
	 */
	public function login($params) {
		//var_dump($params);
		$user=$params["user"];
		$pass=$params["password"];
		//echo"User ".$user." password ".$pass."\r\n";
		if ($user == "snguser" AND $pass == "sngpassword") 
			return true;
		else 
			throw new Exception('Error 20: Wrong login or password');
	}
	
	/**
	 * An immaginative public method.
	 * Since it is a public method, it WILL be served as RPC.
	 * If you want to plug out this method, extend this class with a dummy method.
	 * 
	 * This method returns a significative value and must be implemented as a RPC request.
	 * curl -H "Content-type: application/json" -X POST -d ' {"method": "giveMeSomeData", "params": ["name"], "id": 1}' http://5.175.186.227/sngserver.php
	 * @param string $param
	 * @return mixed
	 */
	public function giveMeSomeData($param) {
		/*
		You can have a very complex code here
		*/
		echo "Here "; var_dump($param[0]);
		if (array_key_exists($param[0],$this->someData)) {
			return $this->someData[$param[0]];
		} else {
			throw new Exception('Invalid parameter '.$param[0]);
		}
	}

	
	
	//curl -H "Content-type: application/json" -X POST -d ' {"method": "getTodayInfo", "params": {"country-code":"pl", "location": [52.2300, 21.0108], "days-ahead":4}, "id": 1}' http://5.175.186.227/sngserver.php
	public function getTodayInfo($params) {
//		var_dump($params);
//		echo "location exists "; var_dump(array_key_exists("location", $params));

	$imieniny = array ();
	$imieniny[1][1] = "Mas³awa, Mieczys³awa, Mieszka";
	$imieniny[1][2] = "Bazylego, Makarego, Narcyzy";
	$imieniny[1][3] = "Arlety, Danuty, Lucjana";
	$imieniny[1][4] = "Anieli, El¿biety, Tytusa";
	$imieniny[1][5] = "Edwarda, Hanny, Szymona";
	$imieniny[1][6] = "Kacpra, Melchiora, Baltazara";
	$imieniny[1][7] = "Juliana, Lucjana, Walentyny";
	$imieniny[1][8] = "Artura, Rajmunda, Seweryny";
	$imieniny[1][9] = "Adriana, Alicji, Teresy";
	$imieniny[1][10] = "Ady, Jana, Wilhelma";
	$imieniny[1][11] = "Feliksa, Honoraty, Marty";
	$imieniny[1][12] = "Bernarda, Czes³awy, Grety";
	$imieniny[1][13] = "Bogumi³a, Bogumi³y, Weroniki";
	$imieniny[1][14] = "Feliksa, Hilarego, Martyny";
	$imieniny[1][15] = "Arnolda, Dory, Paw³a";
	$imieniny[1][16] = "Mascelego, Walerii, W³odzimierza";
	$imieniny[1][17] = "Antoniego, Henryki, Mariana";
	$imieniny[1][18] = "Beatrycze, Ma³gorzaty, Piotra";
	$imieniny[1][19] = "Erwiny, Henryka, Mariusza";
	$imieniny[1][20] = "Fabioli, Mi³y, Sebastiana";
	$imieniny[1][21] = "Agnieszki, Jaros³awa, Nory";
	$imieniny[1][22] = "Dominiki, Mateusza, Wincentego";
	$imieniny[1][23] = "Fernandy, Jana, Rajmundy";
	$imieniny[1][24] = "Felicji, Roberta, S³awy";
	$imieniny[1][25] = "Mi³osza, Paw³a, Tatiany";
	$imieniny[1][26] = "Lutos³awa, Normy, Pauliny";
	$imieniny[1][27] = "Anieli, Juliana, Przemys³awa";
	$imieniny[1][28] = "Agnieszki, Kariny, Les³awa";
	$imieniny[1][29] = "Franciszka, Konstancji, Salomei";
	$imieniny[1][30] = "Martyny, Macieja, Teofila";
	$imieniny[1][31] = "Joanny, Ksawerego, Luizy";
	$imieniny[2][1] = "Brygidy, Dobrogniewa, Ignacego";
	$imieniny[2][2] = "Kornela, Marii, Miros³awy";
	$imieniny[2][3] = "B³a¿eja, Joanny, Telimeny";
	$imieniny[2][4] = "Andrzeja, Mariusza, Weroniki";
	$imieniny[2][5] = "Agaty, Filipa, Justyniana";
	$imieniny[2][6] = "Amandy, Bogdana, Doroty";
	$imieniny[2][7] = "Ryszarda, Teodora, Wilhelminy";
	$imieniny[2][8] = "Irminy, Piotra, Sylwii";
	$imieniny[2][9] = "Bernarda, Eryki, Rajmunda";
	$imieniny[2][10] = "Elwiry, Elizy, Jacka";
	$imieniny[2][11] = "Bernadetty, Marii, Olgierda";
	$imieniny[2][12] = "Czas³awa, Damiana, Normy";
	$imieniny[2][13] = "Grzegorza, Les³awa, Katarzyny";
	$imieniny[2][14] = "Liliany, Walentyny, Walentego";
	$imieniny[2][15] = "Arnolda, Jowity, Georginy";
	$imieniny[2][16] = "Danuty, Daniela, Juliany";
	$imieniny[2][17] = "Donata, Gizeli, £ukasza";
	$imieniny[2][18] = "Konstancji, Krystiana, Sylwany";
	$imieniny[2][19] = "Bettiny, Konrada, Miros³awa";
	$imieniny[2][20] = "Anety, Lehca, Leona";
	$imieniny[2][21] = "Eleonory, Lenki, Kiejstuta";
	$imieniny[2][22] = "Ma³gorzaty, Marty, Nikifora";
	$imieniny[2][23] = "Damiana, Romana, Romany";
	$imieniny[2][24] = "Boguty, Bogusza, Macieja";
	$imieniny[2][25] = "Almy, Cezarego, Jaros³awa";
	$imieniny[2][26] = "Bogumi³a, Eweliny, Miros³awa";
	$imieniny[2][27] = "Gagrieli, Liwii, Leonarda";
	$imieniny[2][28] = "Ludomira, Makarego, Wiliany";
	$imieniny[2][29] = "Lecha, Lutomira";
	$imieniny[3][1] = "Albina, Antoniny, Rados³awy";
	$imieniny[3][2] = "Halszki, Heleny, Karola";
	$imieniny[3][3] = "Kingi, Maryna, Tycjana";
	$imieniny[3][4] = "Adrianny, Kazimierza, Wac³awa";
	$imieniny[3][5] = "Aurory, Fryderyka, Oliwii";
	$imieniny[3][6] = "Jordana, Marcina, Ró¿y";
	$imieniny[3][7] = "Flicyty, Kajetana, Pauli";
	$imieniny[3][8] = "Beaty, Juliana, Wincentego";
	$imieniny[3][9] = "Dominika, Franciszki, Katarzyny";
	$imieniny[3][10] = "Bo¿ys³awy, Cypriana, Marcelego";
	$imieniny[3][11] = "Konstantego, Ludos³awa, Rozyny";
	$imieniny[3][12] = "Grzegorza, Justyny, Józefiny";
	$imieniny[3][13] = "Bo¿eny, Krystyny, Marka";
	$imieniny[3][14] = "Dalii, Leona, Matyldy";
	$imieniny[3][15] = "Delfiny, Longina, Ludwiki";
	$imieniny[3][16] = "Izabeli, Henryka, Oktawii";
	$imieniny[3][17] = "Reginy, Patryka, Zdyszka";
	$imieniny[3][18] = "Edwarda, Narcyza, Zbys³awa";
	$imieniny[3][19] = "Aleksandryny, Józefa, Nicety";
	$imieniny[3][20] = "Joachima, Kiry, Maurycego";
	$imieniny[3][21] = "Benedykta, Lubomiry, Lubomira";
	$imieniny[3][22] = "Bogus³awa, Jagody, Katarzyny";
	$imieniny[3][23] = "Feliksa, Konrada, Zbys³awy";
	$imieniny[3][24] = "Gabrieli, Marka, Seweryna";
	$imieniny[3][25] = "Bolka, Cezaryny, Marioli";
	$imieniny[3][26] = "Dory, Olgi, Teodora";
	$imieniny[3][27] = "Ernesta, Jana, Marka";
	$imieniny[3][28] = "Anieli, Kasrota, Soni";
	$imieniny[3][29] = "Marka, Wiktoryny, Zenona";
	$imieniny[3][30] = "Amelii, Dobromira, Leonarda";
	$imieniny[3][31] = "Balbiny, Kamila, Kornelii";
	$imieniny[4][1] = "Chryzamtyny, Gra¿yny, Zygmunta";
	$imieniny[4][2] = "Franciszka, Malwiny, W³adys³awa";
	$imieniny[4][3] = "Pankracego, Renaty, Ryszarda";
	$imieniny[4][4] = "Benedykta, Izodory, Wac³awy";
	$imieniny[4][5] = "Ireny, Kleofasa, Wincentego";
	$imieniny[4][6] = "Ady, Celestyny, Ireneusza";
	$imieniny[4][7] = "Donata, Herminy, Rufina";
	$imieniny[4][8] = "Amadeusza, Cezaryny, Juliany";
	$imieniny[4][9] = "Mai, Marcelego, Wadima";
	$imieniny[4][10] = "Borys³awy, Makarego, Micha³a";
	$imieniny[4][11] = "Filipa, Izoldy, Leona";
	$imieniny[4][12] = "Juliusza, Lubos³awa, Wiktoryny";
	$imieniny[4][13] = "Artemona, Justyny, Przemys³awy";
	$imieniny[4][14] = "Bernarda, Martyny, Waleriana";
	$imieniny[4][15] = "Adolfiny, Odetty, Wac³awa";
	$imieniny[4][16] = "Bernarda, Biruty, Erwina";
	$imieniny[4][17] = "Anicety, Klary, Rudolfina";
	$imieniny[4][18] = "Apoloniusza, Bogus³awy, Go¶cis³awy";
	$imieniny[4][19] = "Alfa, Leonii, Tytusa";
	$imieniny[4][20] = "Agnieszki, Amalii, Czecha";
	$imieniny[4][21] = "Jaros³awa, Konrada, Selmy";
	$imieniny[4][22] = "£ukasza, Kai, Nastazji";
	$imieniny[4][23] = "Ilony, Jerzego, Wojciecha";
	$imieniny[4][24] = "Bony, Horacji, Jerzego";
	$imieniny[4][25] = "Jaros³awa, Marka, Wiki";
	$imieniny[4][26] = "Marii, Marzeny, Ryszarda";
	$imieniny[4][27] = "Sergiusza, Teofila, Zyty";
	$imieniny[4][28] = "Bogny, Walerii, Witalisa";
	$imieniny[4][29] = "Hugona, Piotra, Roberty";
	$imieniny[4][30] = "Balladyny, Lilli, Mariana";
	$imieniny[5][1] = "Józefa, Lubomira, Ramony";
	$imieniny[5][2] = "Longiny, Toli, Zygmunta";
	$imieniny[5][3] = "Jarope³ka, Marii, Niny";
	$imieniny[5][4] = "Floriana, Micha³a, Moniki";
	$imieniny[5][5] = "Irydy, Tamary, Waldemara";
	$imieniny[5][6] = "Beniny, Filipa, Judyty";
	$imieniny[5][7] = "Augusta, Gizeli, Ludomiry";
	$imieniny[5][8] = "Kornela, Lizy, Stanis³awa";
	$imieniny[5][9] = "Grzegorza, Karoliny, Karola";
	$imieniny[5][10] = "Antoniny, Izydory, Jana";
	$imieniny[5][11] = "Igi, Mamerta, Miry";
	$imieniny[5][12] = "Dominika, Imeldy, Pankracego";
	$imieniny[5][13] = "Agnieszki, Magdaleny, Serwacego";
	$imieniny[5][14] = "Bonifacego, Julity, Macieja";
	$imieniny[5][15] = "Dionizego, Nadziei, Zofii";
	$imieniny[5][16] = "Andrzeja, Jêdrzeja, Ma³gorzaty";
	$imieniny[5][17] = "Brunony, S³awomira, Wery";
	$imieniny[5][18] = "Alicji, Edwina, Eryka";
	$imieniny[5][19] = "Celestyny, Iwony, Piotra";
	$imieniny[5][20] = "Bazylego, Bernardyna, Krystyny";
	$imieniny[5][21] = "Jana, Moniki, Wiktora";
	$imieniny[5][22] = "Emila, Neleny, Romy";
	$imieniny[5][23] = "Leoncjusza, Micha³a, Renaty";
	$imieniny[5][24] = "Joanny, Zdenka, Zuzanny";
	$imieniny[5][25] = "Borysa, Magdy, Marii-Magdaleny";
	$imieniny[5][26] = "Eweliny, Jana, Paw³a";
	$imieniny[5][27] = "Amandy, Jana, Juliana";
	$imieniny[5][28] = "Augustyna, Ingi, Jaromira";
	$imieniny[5][29] = "Benity, Maksymiliana, Teodozji";
	$imieniny[5][30] = "Ferdynanda, Gryzeldy, Zyndrama";
	$imieniny[5][31] = "Anieli, Feliksa, Kamili";
	$imieniny[6][1] = "Gracji, Jakuba, Konrada";
	$imieniny[6][2] = "Erazma, Marianny, Marzeny";
	$imieniny[6][3] = "Anatola, Leszka, Tamary";
	$imieniny[6][4] = "Christy, Helgi, Karola";
	$imieniny[6][5] = "Bonifacego, Kiry, Waltera";
	$imieniny[6][6] = "Laury, Laurentego, Nory";
	$imieniny[6][7] = "Ariadny, Jaros³awa, Roberta";
	$imieniny[6][8] = "Ady, Celii, Medarda";
	$imieniny[6][9] = "Anny-Marii, Felicjana, S³awoja";
	$imieniny[6][10] = "Bogumi³a, Diany, Ma³gorzaty";
	$imieniny[6][11] = "Barnaby, Benedykta, Flory";
	$imieniny[6][12] = "Gwidona, Leonii, Niny";
	$imieniny[6][13] = "Antoniego, Gracji, Lucjana";
	$imieniny[6][14] = "Bazylego, Elizy, Justyny";
	$imieniny[6][15] = "Jolanty, Lotara, Wita";
	$imieniny[6][16] = "Aliny, Anety, Benona";
	$imieniny[6][17] = "Laury, Leszka, Marcjana";
	$imieniny[6][18] = "El¿biety, Marka, Pauli";
	$imieniny[6][19] = "Gerwazego, Protazego, Sylwii";
	$imieniny[6][20] = "Bogny, Rafaeli, Rafa³a";
	$imieniny[6][21] = "Alicji, Alojzego, Rudolfa";
	$imieniny[6][22] = "Pauliny, Sabiny, Tomasza";
	$imieniny[6][23] = "Albina, Wandy, Zenona";
	$imieniny[6][24] = "Danuty, Jana, Janiny";
	$imieniny[6][25] = "£ucji, Witolda, Wilhelma";
	$imieniny[6][26] = "Jana, Pauliny, Rudolfiny";
	$imieniny[6][27] = "Cypriana, Emanueli, W³adys³awa";
	$imieniny[6][28] = "Florentyny, Ligii, Leona";
	$imieniny[6][29] = "Paw³a, Piotra, Salomei";
	$imieniny[6][30] = "Arnolda, Emiliany, Lucyny";
	$imieniny[7][1] = "Bogusza, Haliny, Mariana";
	$imieniny[7][2] = "Kariny, Serafiny, Urbana";
	$imieniny[7][3] = "Anatola, Jacka, Miros³awy";
	$imieniny[7][4] = "Aureli, Malwiny, Zygfryda";
	$imieniny[7][5] = "Antoniego, Bart³omieja, Karoliny";
	$imieniny[7][6] = "Dominiki, Jarope³ka, £ucji";
	$imieniny[7][7] = "Estery, Kiry, Rudolfa";
	$imieniny[7][8] = "Arnolda, Edgara, El¿biety";
	$imieniny[7][9] = "Hieronima, Palomy, Weroniki";
	$imieniny[7][10] = "Filipa, Sylwany, Witalisa";
	$imieniny[7][11] = "Benedykta, Kariny, Olgi";
	$imieniny[7][12] = "Brunona, Jana, Wery";
	$imieniny[7][13] = "Danieli, Irwina, Ma³gorzaty";
	$imieniny[7][14] = "Kamili, Kamila, Marcelego";
	$imieniny[7][15] = "Henryka, Igi, W³odzimierza";
	$imieniny[7][16] = "Eustachego, Mariki, Mirelli";
	$imieniny[7][17] = "Aleksego, Bogdana, Martyny";
	$imieniny[7][18] = "Kamila, Karoliny, Roberta";
	$imieniny[7][19] = "Alfreny, Rufina, Wincentego";
	$imieniny[7][20] = "Fryderyka, Ma³gorzaty, Seweryny";
	$imieniny[7][21] = "Danieli, Wawrzyñca, Wiktora";
	$imieniny[7][22] = "Magdaleny, Mileny, Wawrzyñca";
	$imieniny[7][23] = "S³awy, S³awosza, ¯elis³awy";
	$imieniny[7][24] = "Kingi, Krystyna, Michaliny";
	$imieniny[7][25] = "Jakuba, Krzysztofa, Walentyny";
	$imieniny[7][26] = "Anny, Miros³awy, Joachima";
	$imieniny[7][27] = "Aureliusza, Natalii, Rudolfa";
	$imieniny[7][28] = "Ady, Wiwiany, Sylwiusza";
	$imieniny[7][29] = "Marty, Konstantego, Olafa";
	$imieniny[7][30] = "Julity, Ludmi³y, Zdobys³awa";
	$imieniny[7][31] = "Ignacego, Lodomiry, Romana";
	$imieniny[8][1] = "Jaros³awa, Justyny, Nadziei";
	$imieniny[8][2] = "Gustawa, Kariny, Stefana";
	$imieniny[8][3] = "Augustyna, Kamelii, Lidii";
	$imieniny[8][4] = "Dominiki, Dominika, Protazego";
	$imieniny[8][5] = "Emila, Karoliny, Kary";
	$imieniny[8][6] = "Jakuba, S³awy, Wincentego";
	$imieniny[8][7] = "Donaty, Olechny, Kajetana";
	$imieniny[8][8] = "Izy, Rajmunda, Seweryna";
	$imieniny[8][9] = "Klary, Romana, Rozyny";
	$imieniny[8][10] = "Bianki, Borysa, Wawrzyñca";
	$imieniny[8][11] = "Luizy, W³odzmierza, Zuzanny";
	$imieniny[8][12] = "Hilarii, Juliana, Lecha";
	$imieniny[8][13] = "Elwiry, Hipolita, Rados³awy";
	$imieniny[8][14] = "Alfreda, Maksymiliana, Selmy";
	$imieniny[8][15] = "Marii, Napoleona, Stelii";
	$imieniny[8][16] = "Joachima, Nory, Stefana";
	$imieniny[8][17] = "Anity, Elizy, Mirona";
	$imieniny[8][18] = "Bogus³awa, Bronis³awa, Ilony";
	$imieniny[8][19] = "Emilii, Julinana, Konstancji";
	$imieniny[8][20] = "Bernarda, Sabiny, Samuela";
	$imieniny[8][21] = "Franciszka, Kazimiery, Ruty";
	$imieniny[8][22] = "Cezarego, Marii, Zygfryda";
	$imieniny[8][23] = "Apolinarego, Mi³y, Ró¿y";
	$imieniny[8][24] = "Bartosza, Jerzego, Maliny";
	$imieniny[8][25] = "Belii, Ludwika, Luizy";
	$imieniny[8][26] = "Ireneusza, Konstantego, Marii";
	$imieniny[8][27] = "Cezarego, Ma³gorzaty, Moniki";
	$imieniny[8][28] = "Adeliny, Erazma, Sobies³awa";
	$imieniny[8][29] = "Beaty, Racibora, Sabiny";
	$imieniny[8][30] = "Benona, Jowity, Szczêsnego";
	$imieniny[8][31] = "Cyrusa, Izabeli, Rajmundy";
	$imieniny[9][1] = "Belindy, Bronisza, Idziego";
	$imieniny[9][2] = "Dionizy, Izy, Juliana";
	$imieniny[9][3] = "Joachima, Liliany, Szymona";
	$imieniny[9][4] = "Dalii, Idy, Rocha";
	$imieniny[9][5] = "Doroty, Justyna, Wawrzyñca";
	$imieniny[9][6] = "Beaty, Eugeniusza, Lidy";
	$imieniny[9][7] = "Reginy, Marka, Melchiora";
	$imieniny[9][8] = "Czcibora, Marii, Serafiny";
	$imieniny[9][9] = "Aldony, Jakuba, Sergiusza";
	$imieniny[9][10] = "Eligii, Irmy, £ukasza";
	$imieniny[9][11] = "Dagny, Jacka, Prota";
	$imieniny[9][12] = "Amadeusza, Gwidy, Sylwiny";
	$imieniny[9][13] = "Apolinarego, Eugenii, Lubomira";
	$imieniny[9][14] = "Bernarda, Mony, Roksany";
	$imieniny[9][15] = "Albina, Lolity, Ronalda";
	$imieniny[9][16] = "Jagienki, Kamili, Korneliusza";
	$imieniny[9][17] = "Franciszka, Lamberty, Narcyza";
	$imieniny[9][18] = "Ireny, Irminy, Stanis³awa";
	$imieniny[9][19] = "Januarego, Konstancji, Leopolda";
	$imieniny[9][20] = "Eustachego, Faustyny, Renaty";
	$imieniny[9][21] = "Darii, Mateusza, Wawrzyñca";
	$imieniny[9][22] = "Maury, Milany, Tomasza";
	$imieniny[9][23] = "Bogus³awa, Liwiusza, Tekli";
	$imieniny[9][24] = "Dory, Gerarda, Maryny";
	$imieniny[9][25] = "Aureli, Kamila, Kleofasa";
	$imieniny[9][26] = "Cypriana, Justyny, £ucji";
	$imieniny[9][27] = "Damiana, Mirabeli, Wincentego";
	$imieniny[9][28] = "Libuszy, Wac³awy, Wac³awa";
	$imieniny[9][29] = "Michaliny, Micha³a, Rafa³a";
	$imieniny[9][30] = "Geraldy, Honoriusza, Wery";
	$imieniny[10][1] = "Heloizy, Igora, Remigiusza";
	$imieniny[10][2] = "Racheli, S³awy, Teofila";
	$imieniny[10][3] = "Bogumi³a, Gerarda, Józefy";
	$imieniny[10][4] = "Edwina, Ros³awy, Rozalii";
	$imieniny[10][5] = "Flawii, Justyna, Rajmunda";
	$imieniny[10][6] = "Artura, Fryderyki, Petry";
	$imieniny[10][7] = "Krystyna, Marii, Marka";
	$imieniny[10][8] = "Brygidy, Loreny, Marcina";
	$imieniny[10][9] = "Arnolda, Ludwika, Sybili";
	$imieniny[10][10] = "Franciszka, Loretty, Poli";
	$imieniny[10][11] = "Aldony, Brunona, Emila";
	$imieniny[10][12] = "Krystyny, Maksa, Serafiny";
	$imieniny[10][13] = "Edwarda, Geraldyny, Teofila";
	$imieniny[10][14] = "Alany, Damiana, Liwii";
	$imieniny[10][15] = "Jadwigi, Leonarda, Teresy";
	$imieniny[10][16] = "Ambro¿ego, Florentyny, Gaw³a";
	$imieniny[10][17] = "Antonii, Ignacego, Wiktora";
	$imieniny[10][18] = "Hanny, Klementyny, £ukasza";
	$imieniny[10][19] = "Michaliny, Micha³a, Piotra";
	$imieniny[10][20] = "Ireny, Kleopatry, Witalisa";
	$imieniny[10][21] = "Celiny, Hilarego, Janusza";
	$imieniny[10][22] = "Haliszki, Lody, Przybys³¹wa";
	$imieniny[10][23] = "Edwarda, Marleny, Seweryna";
	$imieniny[10][24] = "Arety, Marty, Marcina";
	$imieniny[10][25] = "Ingi, Maurycego, Sambora";
	$imieniny[10][26] = "Ewarysta, Lucyny, Lutos³awy";
	$imieniny[10][27] = "Iwony, Noemi, Szymona";
	$imieniny[10][28] = "Narcyza, Serafina, Wioletty";
	$imieniny[10][29] = "Angeli, Przemys³awa, Zenobii";
	$imieniny[10][30] = "Augustyny, £ukasza, Urbana";
	$imieniny[11][1] = "Konrada, Seweryny, Wiktoryny";
	$imieniny[11][2] = "Bohdany, Henryka, Tobiasza";
	$imieniny[11][3] = "Huberta, Mi³y, Sylwii";
	$imieniny[11][4] = "Albertyny, Karola, Olgierda";
	$imieniny[11][5] = "Balladyny, El¿biety, S³awomira";
	$imieniny[11][6] = "Arletty, Feliksa, Leonarda";
	$imieniny[11][7] = "Antoniego, Kaliny, Przemi³y";
	$imieniny[11][8] = "Klaudii, Seweryna, Wiktoriusza";
	$imieniny[11][9] = "Anatolii, Gracji, Teodora";
	$imieniny[11][10] = "Leny, Lubomira, Natalii";
	$imieniny[11][11] = "Bart³omieja, Gertrudy, Marcina";
	$imieniny[11][12] = "Konrada, Renaty, Witolda";
	$imieniny[11][13] = "Arkadii, Krystyna, Stanis³awy";
	$imieniny[11][14] = "Emila, Laury, Rogera";
	$imieniny[11][15] = "Amielii, Idalii, Leopolda";
	$imieniny[11][16] = "Edmunda, Marii, Marka";
	$imieniny[11][17] = "Grzegorza, Salomei, Walerii";
	$imieniny[11][18] = "Klaudyny, Romana, Tomasza";
	$imieniny[11][19] = "El¿biety, Faustyny, Paw³a";
	$imieniny[11][20] = "Anatola, Edyty, Rafa³a";
	$imieniny[11][21] = "Janusza, Marii, Reginy";
	$imieniny[11][22] = "Cecylii, Jonatana, Marka";
	$imieniny[11][23] = "Adeli, Felicyty, Klemensa";
	$imieniny[11][24] = "Emmy, Flory, Romana";
	$imieniny[11][25] = "El¿biety, Katarzyny, Klemensa";
	$imieniny[11][26] = "Leona, Leonarda, Les³awy";
	$imieniny[11][27] = "Franciszka, Kseni, Maksymiliana";
	$imieniny[11][28] = "Jakuba, Stefana, Romy";
	$imieniny[11][29] = "B³a¿eja, Margerity, Saturnina";
	$imieniny[11][30] = "Andrzeja, Maury, Ondraszka";
	$imieniny[12][1] = "Blanki, Edmunda, Eligiusza";
	$imieniny[12][2] = "Balbiny, Ksawerego, Pauliny";
	$imieniny[12][3] = "Hilarego, Franciszki, Ksawery";
	$imieniny[12][4] = "Barbary, Hieronima, Krystiana";
	$imieniny[12][5] = "Kryspiny, Norberta, Sabiny";
	$imieniny[12][6] = "Dionizji, Leontyny, Miko³aja";
	$imieniny[12][7] = "Agaty, Dalii, Sobies³awa";
	$imieniny[12][8] = "Delfiny, Marii, Wirginiusza";
	$imieniny[12][9] = "Anety, Leokadii, Wies³awa";
	$imieniny[12][10] = "Danieli, Bohdana, Julii";
	$imieniny[12][11] = "Biny, Damazego, Waldemara";
	$imieniny[12][12] = "Ady, Aleksandra, Dagmary";
	$imieniny[12][13] = "Dalidy, Juliusza, £ucji";
	$imieniny[12][14] = "Alfreda, Izydora, Zoriny";
	$imieniny[12][15] = "Celiny, Ireneusza, Niny";
	$imieniny[12][16] = "Albiny, Sebastiana, Zdzis³awy";
	$imieniny[12][17] = "Jolanty, £ukasza, Olimpii";
	$imieniny[12][18] = "Bogus³awa, Gracjana, Laury";
	$imieniny[12][19] = "Beniaminy, Dariusza, Gabrieli";
	$imieniny[12][20] = "Bogumi³y, Dominika, Zefiryna";
	$imieniny[12][21] = "Honoraty, Seweryny, Tomasza";
	$imieniny[12][22] = "Bo¿eny, Drogomira, Zenona";
	$imieniny[12][23] = "Dagny, S³awomiry, Wiktora";
	$imieniny[12][24] = "Adama, Ewy, Irminy";
	$imieniny[12][25] = "Anety, Glorii, Piotra";
	$imieniny[12][26] = "Dionizego, Kaliksta, Szczepana";
	$imieniny[12][27] = "Fabioli, Jana, ¯anety";
	$imieniny[12][28] = "Antoniusza, Cezarego, Teofilii";
	$imieniny[12][29] = "Dawida, Dionizy, Tomasza";
	$imieniny[12][30] = "Eugeniusza, Katarzyny, Sabiny";
	$imieniny[12][31] = "Mariusza, Melanii, Sylwestra";

		if (array_key_exists("country-code", $params) AND
			array_key_exists("location", $params) AND 
			array_key_exists("days-ahead", $params)) {				
	
			$date = new DateTime('now');
			$todayInfo = array (
				"date" => $date->format('Y-m-d'),
				"dayname" => $date->format('l')
			);
			
			$namesday = $imieniny[12][31];

			$holiday = "Brak";
			
			$daysCount=$params["days-ahead"];	
			if ($daysCount > 10) {
				$daysCount = 10;
			}
			$sunArray = array();
			for ($i = 0; $i < $daysCount; $i++) {
				$date->add(new DateInterval('P1D'));
				$tempArray = array (
					"date" => $date->format('Y-m-d'),
					"sunrise" => "6:03",
            				"sunset" => "19:16");
				array_push($sunArray, $tempArray);					
			}
			
			$response = array (
				"success" => true,
				"today" => $todayInfo,
				"sun" => $sunArray,
				"namesday" => $namesday,
				"holiday" => $holiday,
				"week" => 41,				
				"total-weeks" => 57,
				"dayofyear" => 298,
				"daystillend" => 67);

			return $response;

		} else {
			throw new Exception('Invalid parameter '.$param[0]);
		}	
	}
}
?>
