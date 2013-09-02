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

	private $namesdays = array (
	    1 => array
		( 
		    1 => "Mas³awa, Mieczys³awa, Mieszka", 
		    2 => "Bazylego, Makarego, Narcyzy", 
		    3 => "Arlety, Danuty, Lucjana", 
		    4 => "Anieli, El¿biety, Tytusa", 
		    5 => "Edwarda, Hanny, Szymona", 
		    6 => "Kacpra, Melchiora, Baltazara", 
		    7 => "Juliana, Lucjana, Walentyny", 
		    8 => "Artura, Rajmunda, Seweryny", 
		    9 => "Adriana, Alicji, Teresy", 
		    10 => "Ady, Jana, Wilhelma", 
		    11 => "Feliksa, Honoraty, Marty", 
		    12 => "Bernarda, Czes³awy, Grety", 
		    13 => "Bogumi³a, Bogumi³y, Weroniki", 
		    14 => "Feliksa, Hilarego, Martyny", 
		    15 => "Arnolda, Dory, Paw³a", 
		    16 => "Mascelego, Walerii, W³odzimierza", 
		    17 => "Antoniego, Henryki, Mariana", 
		    18 => "Beatrycze, Ma³gorzaty, Piotra", 
		    19 => "Erwiny, Henryka, Mariusza", 
		    20 => "Fabioli, Mi³y, Sebastiana", 
		    21 => "Agnieszki, Jaros³awa, Nory", 
		    22 => "Dominiki, Mateusza, Wincentego", 
		    23 => "Fernandy, Jana, Rajmundy", 
		    24 => "Felicji, Roberta, S³awy", 
		    25 => "Mi³osza, Paw³a, Tatiany", 
		    26 => "Lutos³awa, Normy, Pauliny", 
		    27 => "Anieli, Juliana, Przemys³awa", 
		    28 => "Agnieszki, Kariny, Les³awa", 
		    29 => "Franciszka, Konstancji, Salomei", 
		    30 => "Martyny, Macieja, Teofila", 
		    31 => "Joanny, Ksawerego, Luizy"
		),

	    2 => array
		( 
		    1 => "Brygidy, Dobrogniewa, Ignacego", 
		    2 => "Kornela, Marii, Miros³awy", 
		    3 => "B³a¿eja, Joanny, Telimeny", 
		    4 => "Andrzeja, Mariusza, Weroniki", 
		    5 => "Agaty, Filipa, Justyniana", 
		    6 => "Amandy, Bogdana, Doroty", 
		    7 => "Ryszarda, Teodora, Wilhelminy", 
		    8 => "Irminy, Piotra, Sylwii", 
		    9 => "Bernarda, Eryki, Rajmunda", 
		    10 => "Elwiry, Elizy, Jacka", 
		    11 => "Bernadetty, Marii, Olgierda", 
		    12 => "Czas³awa, Damiana, Normy", 
		    13 => "Grzegorza, Les³awa, Katarzyny", 
		    14 => "Liliany, Walentyny, Walentego", 
		    15 => "Arnolda, Jowity, Georginy", 
		    16 => "Danuty, Daniela, Juliany", 
		    17 => "Donata, Gizeli, £ukasza", 
		    18 => "Konstancji, Krystiana, Sylwany", 
		    19 => "Bettiny, Konrada, Miros³awa", 
		    20 => "Anety, Lehca, Leona", 
		    21 => "Eleonory, Lenki, Kiejstuta", 
		    22 => "Ma³gorzaty, Marty, Nikifora", 
		    23 => "Damiana, Romana, Romany", 
		    24 => "Boguty, Bogusza, Macieja", 
		    25 => "Almy, Cezarego, Jaros³awa", 
		    26 => "Bogumi³a, Eweliny, Miros³awa", 
		    27 => "Gagrieli, Liwii, Leonarda", 
		    28 => "Ludomira, Makarego, Wiliany", 
		    29 => "Lecha, Lutomira"
		),

	    3 => array
		( 
		    1 => "Albina, Antoniny, Rados³awy", 
		    2 => "Halszki, Heleny, Karola", 
		    3 => "Kingi, Maryna, Tycjana", 
		    4 => "Adrianny, Kazimierza, Wac³awa", 
		    5 => "Aurory, Fryderyka, Oliwii", 
		    6 => "Jordana, Marcina, Ró¿y", 
		    7 => "Flicyty, Kajetana, Pauli", 
		    8 => "Beaty, Juliana, Wincentego", 
		    9 => "Dominika, Franciszki, Katarzyny", 
		    10 => "Bo¿ys³awy, Cypriana, Marcelego", 
		    11 => "Konstantego, Ludos³awa, Rozyny", 
		    12 => "Grzegorza, Justyny, Józefiny", 
		    13 => "Bo¿eny, Krystyny, Marka", 
		    14 => "Dalii, Leona, Matyldy", 
		    15 => "Delfiny, Longina, Ludwiki", 
		    16 => "Izabeli, Henryka, Oktawii", 
		    17 => "Reginy, Patryka, Zdyszka", 
		    18 => "Edwarda, Narcyza, Zbys³awa", 
		    19 => "Aleksandryny, Józefa, Nicety", 
		    20 => "Joachima, Kiry, Maurycego", 
		    21 => "Benedykta, Lubomiry, Lubomira", 
		    22 => "Bogus³awa, Jagody, Katarzyny", 
		    23 => "Feliksa, Konrada, Zbys³awy", 
		    24 => "Gabrieli, Marka, Seweryna", 
		    25 => "Bolka, Cezaryny, Marioli", 
		    26 => "Dory, Olgi, Teodora", 
		    27 => "Ernesta, Jana, Marka", 
		    28 => "Anieli, Kasrota, Soni", 
		    29 => "Marka, Wiktoryny, Zenona", 
		    30 => "Amelii, Dobromira, Leonarda", 
		    31 => "Balbiny, Kamila, Kornelii"
		),

	    4 => array
		( 
		    1 => "Chryzamtyny, Gra¿yny, Zygmunta", 
		    2 => "Franciszka, Malwiny, W³adys³awa", 
		    3 => "Pankracego, Renaty, Ryszarda", 
		    4 => "Benedykta, Izodory, Wac³awy", 
		    5 => "Ireny, Kleofasa, Wincentego", 
		    6 => "Ady, Celestyny, Ireneusza", 
		    7 => "Donata, Herminy, Rufina", 
		    8 => "Amadeusza, Cezaryny, Juliany", 
		    9 => "Mai, Marcelego, Wadima", 
		    10 => "Borys³awy, Makarego, Micha³a", 
		    11 => "Filipa, Izoldy, Leona", 
		    12 => "Juliusza, Lubos³awa, Wiktoryny", 
		    13 => "Artemona, Justyny, Przemys³awy", 
		    14 => "Bernarda, Martyny, Waleriana", 
		    15 => "Adolfiny, Odetty, Wac³awa", 
		    16 => "Bernarda, Biruty, Erwina", 
		    17 => "Anicety, Klary, Rudolfina", 
		    18 => "Apoloniusza, Bogus³awy, Go¶cis³awy", 
		    19 => "Alfa, Leonii, Tytusa", 
		    20 => "Agnieszki, Amalii, Czecha", 
		    21 => "Jaros³awa, Konrada, Selmy", 
		    22 => "£ukasza, Kai, Nastazji", 
		    23 => "Ilony, Jerzego, Wojciecha", 
		    24 => "Bony, Horacji, Jerzego", 
		    25 => "Jaros³awa, Marka, Wiki", 
		    26 => "Marii, Marzeny, Ryszarda", 
		    27 => "Sergiusza, Teofila, Zyty", 
		    28 => "Bogny, Walerii, Witalisa", 
		    29 => "Hugona, Piotra, Roberty", 
		    30 => "Balladyny, Lilli, Mariana"
		),

	    5 => array
		( 
		    1 => "Józefa, Lubomira, Ramony", 
		    2 => "Longiny, Toli, Zygmunta", 
		    3 => "Jarope³ka, Marii, Niny", 
		    4 => "Floriana, Micha³a, Moniki", 
		    5 => "Irydy, Tamary, Waldemara", 
		    6 => "Beniny, Filipa, Judyty", 
		    7 => "Augusta, Gizeli, Ludomiry", 
		    8 => "Kornela, Lizy, Stanis³awa", 
		    9 => "Grzegorza, Karoliny, Karola", 
		    10 => "Antoniny, Izydory, Jana", 
		    11 => "Igi, Mamerta, Miry", 
		    12 => "Dominika, Imeldy, Pankracego", 
		    13 => "Agnieszki, Magdaleny, Serwacego", 
		    14 => "Bonifacego, Julity, Macieja", 
		    15 => "Dionizego, Nadziei, Zofii", 
		    16 => "Andrzeja, Jêdrzeja, Ma³gorzaty", 
		    17 => "Brunony, S³awomira, Wery", 
		    18 => "Alicji, Edwina, Eryka", 
		    19 => "Celestyny, Iwony, Piotra", 
		    20 => "Bazylego, Bernardyna, Krystyny", 
		    21 => "Jana, Moniki, Wiktora", 
		    22 => "Emila, Neleny, Romy", 
		    23 => "Leoncjusza, Micha³a, Renaty", 
		    24 => "Joanny, Zdenka, Zuzanny", 
		    25 => "Borysa, Magdy, Marii-Magdaleny", 
		    26 => "Eweliny, Jana, Paw³a", 
		    27 => "Amandy, Jana, Juliana", 
		    28 => "Augustyna, Ingi, Jaromira", 
		    29 => "Benity, Maksymiliana, Teodozji", 
		    30 => "Ferdynanda, Gryzeldy, Zyndrama", 
		    31 => "Anieli, Feliksa, Kamili"
		),

	    6 => array
		( 
		    1 => "Gracji, Jakuba, Konrada", 
		    2 => "Erazma, Marianny, Marzeny", 
		    3 => "Anatola, Leszka, Tamary", 
		    4 => "Christy, Helgi, Karola", 
		    5 => "Bonifacego, Kiry, Waltera", 
		    6 => "Laury, Laurentego, Nory", 
		    7 => "Ariadny, Jaros³awa, Roberta", 
		    8 => "Ady, Celii, Medarda", 
		    9 => "Anny-Marii, Felicjana, S³awoja", 
		    10 => "Bogumi³a, Diany, Ma³gorzaty", 
		    11 => "Barnaby, Benedykta, Flory", 
		    12 => "Gwidona, Leonii, Niny", 
		    13 => "Antoniego, Gracji, Lucjana", 
		    14 => "Bazylego, Elizy, Justyny", 
		    15 => "Jolanty, Lotara, Wita", 
		    16 => "Aliny, Anety, Benona", 
		    17 => "Laury, Leszka, Marcjana", 
		    18 => "El¿biety, Marka, Pauli", 
		    19 => "Gerwazego, Protazego, Sylwii", 
		    20 => "Bogny, Rafaeli, Rafa³a", 
		    21 => "Alicji, Alojzego, Rudolfa", 
		    22 => "Pauliny, Sabiny, Tomasza", 
		    23 => "Albina, Wandy, Zenona", 
		    24 => "Danuty, Jana, Janiny", 
		    25 => "£ucji, Witolda, Wilhelma", 
		    26 => "Jana, Pauliny, Rudolfiny", 
		    27 => "Cypriana, Emanueli, W³adys³awa", 
		    28 => "Florentyny, Ligii, Leona", 
		    29 => "Paw³a, Piotra, Salomei", 
		    30 => "Arnolda, Emiliany, Lucyny"
		),

	    7 => array
		( 
		    1 => "Bogusza, Haliny, Mariana", 
		    2 => "Kariny, Serafiny, Urbana", 
		    3 => "Anatola, Jacka, Miros³awy", 
		    4 => "Aureli, Malwiny, Zygfryda", 
		    5 => "Antoniego, Bart³omieja, Karoliny", 
		    6 => "Dominiki, Jarope³ka, £ucji", 
		    7 => "Estery, Kiry, Rudolfa", 
		    8 => "Arnolda, Edgara, El¿biety", 
		    9 => "Hieronima, Palomy, Weroniki", 
		    10 => "Filipa, Sylwany, Witalisa", 
		    11 => "Benedykta, Kariny, Olgi", 
		    12 => "Brunona, Jana, Wery", 
		    13 => "Danieli, Irwina, Ma³gorzaty", 
		    14 => "Kamili, Kamila, Marcelego", 
		    15 => "Henryka, Igi, W³odzimierza", 
		    16 => "Eustachego, Mariki, Mirelli", 
		    17 => "Aleksego, Bogdana, Martyny", 
		    18 => "Kamila, Karoliny, Roberta", 
		    19 => "Alfreny, Rufina, Wincentego", 
		    20 => "Fryderyka, Ma³gorzaty, Seweryny", 
		    21 => "Danieli, Wawrzyñca, Wiktora", 
		    22 => "Magdaleny, Mileny, Wawrzyñca", 
		    23 => "S³awy, S³awosza, ¯elis³awy", 
		    24 => "Kingi, Krystyna, Michaliny", 
		    25 => "Jakuba, Krzysztofa, Walentyny", 
		    26 => "Anny, Miros³awy, Joachima", 
		    27 => "Aureliusza, Natalii, Rudolfa", 
		    28 => "Ady, Wiwiany, Sylwiusza", 
		    29 => "Marty, Konstantego, Olafa", 
		    30 => "Julity, Ludmi³y, Zdobys³awa", 
		    31 => "Ignacego, Lodomiry, Romana"
		),

	    8 => array
		( 
		    1 => "Jaros³awa, Justyny, Nadziei", 
		    2 => "Gustawa, Kariny, Stefana", 
		    3 => "Augustyna, Kamelii, Lidii", 
		    4 => "Dominiki, Dominika, Protazego", 
		    5 => "Emila, Karoliny, Kary", 
		    6 => "Jakuba, S³awy, Wincentego", 
		    7 => "Donaty, Olechny, Kajetana", 
		    8 => "Izy, Rajmunda, Seweryna", 
		    9 => "Klary, Romana, Rozyny", 
		    10 => "Bianki, Borysa, Wawrzyñca", 
		    11 => "Luizy, W³odzmierza, Zuzanny", 
		    12 => "Hilarii, Juliana, Lecha", 
		    13 => "Elwiry, Hipolita, Rados³awy", 
		    14 => "Alfreda, Maksymiliana, Selmy", 
		    15 => "Marii, Napoleona, Stelii", 
		    16 => "Joachima, Nory, Stefana", 
		    17 => "Anity, Elizy, Mirona", 
		    18 => "Bogus³awa, Bronis³awa, Ilony", 
		    19 => "Emilii, Julinana, Konstancji", 
		    20 => "Bernarda, Sabiny, Samuela", 
		    21 => "Franciszka, Kazimiery, Ruty", 
		    22 => "Cezarego, Marii, Zygfryda", 
		    23 => "Apolinarego, Mi³y, Ró¿y", 
		    24 => "Bartosza, Jerzego, Maliny", 
		    25 => "Belii, Ludwika, Luizy", 
		    26 => "Ireneusza, Konstantego, Marii", 
		    27 => "Cezarego, Ma³gorzaty, Moniki", 
		    28 => "Adeliny, Erazma, Sobies³awa", 
		    29 => "Beaty, Racibora, Sabiny", 
		    30 => "Benona, Jowity, Szczêsnego", 
		    31 => "Cyrusa, Izabeli, Rajmundy"
		),

	    9 => array
		( 
		    1 => "Belindy, Bronisza, Idziego", 
		    2 => "Dionizy, Izy, Juliana", 
		    3 => "Joachima, Liliany, Szymona", 
		    4 => "Dalii, Idy, Rocha", 
		    5 => "Doroty, Justyna, Wawrzyñca", 
		    6 => "Beaty, Eugeniusza, Lidy", 
		    7 => "Reginy, Marka, Melchiora", 
		    8 => "Czcibora, Marii, Serafiny", 
		    9 => "Aldony, Jakuba, Sergiusza", 
		    10 => "Eligii, Irmy, £ukasza", 
		    11 => "Dagny, Jacka, Prota", 
		    12 => "Amadeusza, Gwidy, Sylwiny", 
		    13 => "Apolinarego, Eugenii, Lubomira", 
		    14 => "Bernarda, Mony, Roksany", 
		    15 => "Albina, Lolity, Ronalda", 
		    16 => "Jagienki, Kamili, Korneliusza", 
		    17 => "Franciszka, Lamberty, Narcyza", 
		    18 => "Ireny, Irminy, Stanis³awa", 
		    19 => "Januarego, Konstancji, Leopolda", 
		    20 => "Eustachego, Faustyny, Renaty", 
		    21 => "Darii, Mateusza, Wawrzyñca", 
		    22 => "Maury, Milany, Tomasza", 
		    23 => "Bogus³awa, Liwiusza, Tekli", 
		    24 => "Dory, Gerarda, Maryny", 
		    25 => "Aureli, Kamila, Kleofasa", 
		    26 => "Cypriana, Justyny, £ucji", 
		    27 => "Damiana, Mirabeli, Wincentego", 
		    28 => "Libuszy, Wac³awy, Wac³awa", 
		    29 => "Michaliny, Micha³a, Rafa³a", 
		    30 => "Geraldy, Honoriusza, Wery"
		),

	    10 => array
		( 
		    1 => "Heloizy, Igora, Remigiusza", 
		    2 => "Racheli, S³awy, Teofila", 
		    3 => "Bogumi³a, Gerarda, Józefy", 
		    4 => "Edwina, Ros³awy, Rozalii", 
		    5 => "Flawii, Justyna, Rajmunda", 
		    6 => "Artura, Fryderyki, Petry", 
		    7 => "Krystyna, Marii, Marka", 
		    8 => "Brygidy, Loreny, Marcina", 
		    9 => "Arnolda, Ludwika, Sybili", 
		    10 => "Franciszka, Loretty, Poli", 
		    11 => "Aldony, Brunona, Emila", 
		    12 => "Krystyny, Maksa, Serafiny", 
		    13 => "Edwarda, Geraldyny, Teofila", 
		    14 => "Alany, Damiana, Liwii", 
		    15 => "Jadwigi, Leonarda, Teresy", 
		    16 => "Ambro¿ego, Florentyny, Gaw³a", 
		    17 => "Antonii, Ignacego, Wiktora", 
		    18 => "Hanny, Klementyny, £ukasza", 
		    19 => "Michaliny, Micha³a, Piotra", 
		    20 => "Ireny, Kleopatry, Witalisa", 
		    21 => "Celiny, Hilarego, Janusza", 
		    22 => "Haliszki, Lody, Przybys³¹wa", 
		    23 => "Edwarda, Marleny, Seweryna", 
		    24 => "Arety, Marty, Marcina", 
		    25 => "Ingi, Maurycego, Sambora", 
		    26 => "Ewarysta, Lucyny, Lutos³awy", 
		    27 => "Iwony, Noemi, Szymona", 
		    28 => "Narcyza, Serafina, Wioletty", 
		    29 => "Angeli, Przemys³awa, Zenobii", 
		    30 => "Augustyny, £ukasza, Urbana"
		),

	    11 => array
		( 
		    1 => "Konrada, Seweryny, Wiktoryny", 
		    2 => "Bohdany, Henryka, Tobiasza", 
		    3 => "Huberta, Mi³y, Sylwii", 
		    4 => "Albertyny, Karola, Olgierda", 
		    5 => "Balladyny, El¿biety, S³awomira", 
		    6 => "Arletty, Feliksa, Leonarda", 
		    7 => "Antoniego, Kaliny, Przemi³y", 
		    8 => "Klaudii, Seweryna, Wiktoriusza", 
		    9 => "Anatolii, Gracji, Teodora", 
		    10 => "Leny, Lubomira, Natalii", 
		    11 => "Bart³omieja, Gertrudy, Marcina", 
		    12 => "Konrada, Renaty, Witolda", 
		    13 => "Arkadii, Krystyna, Stanis³awy", 
		    14 => "Emila, Laury, Rogera", 
		    15 => "Amielii, Idalii, Leopolda", 
		    16 => "Edmunda, Marii, Marka", 
		    17 => "Grzegorza, Salomei, Walerii", 
		    18 => "Klaudyny, Romana, Tomasza", 
		    19 => "El¿biety, Faustyny, Paw³a", 
		    20 => "Anatola, Edyty, Rafa³a", 
		    21 => "Janusza, Marii, Reginy", 
		    22 => "Cecylii, Jonatana, Marka", 
		    23 => "Adeli, Felicyty, Klemensa", 
		    24 => "Emmy, Flory, Romana", 
		    25 => "El¿biety, Katarzyny, Klemensa", 
		    26 => "Leona, Leonarda, Les³awy", 
		    27 => "Franciszka, Kseni, Maksymiliana", 
		    28 => "Jakuba, Stefana, Romy", 
		    29 => "B³a¿eja, Margerity, Saturnina", 
		    30 => "Andrzeja, Maury, Ondraszka"
		),

	    12 => array
		( 
		    1 => "Blanki, Edmunda, Eligiusza", 
		    2 => "Balbiny, Ksawerego, Pauliny", 
		    3 => "Hilarego, Franciszki, Ksawery", 
		    4 => "Barbary, Hieronima, Krystiana", 
		    5 => "Kryspiny, Norberta, Sabiny", 
		    6 => "Dionizji, Leontyny, Miko³aja", 
		    7 => "Agaty, Dalii, Sobies³awa", 
		    8 => "Delfiny, Marii, Wirginiusza", 
		    9 => "Anety, Leokadii, Wies³awa", 
		    10 => "Danieli, Bohdana, Julii", 
		    11 => "Biny, Damazego, Waldemara", 
		    12 => "Ady, Aleksandra, Dagmary", 
		    13 => "Dalidy, Juliusza, £ucji", 
		    14 => "Alfreda, Izydora, Zoriny", 
		    15 => "Celiny, Ireneusza, Niny", 
		    16 => "Albiny, Sebastiana, Zdzis³awy", 
		    17 => "Jolanty, £ukasza, Olimpii", 
		    18 => "Bogus³awa, Gracjana, Laury", 
		    19 => "Beniaminy, Dariusza, Gabrieli", 
		    20 => "Bogumi³y, Dominika, Zefiryna", 
		    21 => "Honoraty, Seweryny, Tomasza", 
		    22 => "Bo¿eny, Drogomira, Zenona", 
		    23 => "Dagny, S³awomiry, Wiktora", 
		    24 => "Adama, Ewy, Irminy", 
		    25 => "Anety, Glorii, Piotra", 
		    26 => "Dionizego, Kaliksta, Szczepana", 
		    27 => "Fabioli, Jana, ¯anety", 
		    28 => "Antoniusza, Cezarego, Teofilii", 
		    29 => "Dawida, Dionizy, Tomasza", 
		    30 => "Eugeniusza, Katarzyny, Sabiny", 
		    31 => "Mariusza, Melanii, Sylwestra"
		)

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

	
	const ZENITH = 90.833333333;//90+50/60;
	const OFFSET = 0;//TODO: need to correct it according to long lat passed 	

	//curl -H "Content-type: application/json" -X POST -d ' {"method": "getTodayInfo", "params": {"country-code":"pl", "location": [52.2300, 21.0108], "days-ahead":4}, "id": 1}' http://5.175.186.227/sngserver.php
	public function getTodayInfo($params) {
//		var_dump($params);
//		echo "location exists "; var_dump(array_key_exists("location", $params));

		if (array_key_exists("country-code", $params) AND
			array_key_exists("location", $params) AND 
			array_key_exists("days-ahead", $params)) {				
	
			$date = new DateTime('now');
			$todayInfo = array (
				"date" => $date->format('Y-m-d'),
				"dayname" => $date->format('l')
			);
			
			$m = intval($date->format('m'));
			$d = intval($date->format('d'));
			$namesday = $this->namesdays[$m][$d];

			$holiday = "Brak";
			
			$daysCount=$params["days-ahead"];	
			if ($daysCount > 10) {
				$daysCount = 10;
			}
			$lat = $params[location][0];
			$long = $params[location][1];
			$sunArray = array();
			for ($i = 0; $i < $daysCount; $i++) {
				$date->add(new DateInterval('P1D'));
				$timestamp = $date->getTimestamp();
				$tempArray = array (
					"date" => $date->format('Y-m-d'),
					"sunrise" => date_sunrise($timestamp, SUNFUNCS_RET_STRING, $lat, $long, SngHandler::ZENITH, SngHandler::OFFSET),
            				"sunset" => date_sunset($timestamp, SUNFUNCS_RET_STRING, $lat, $long, SngHandler::ZENITH, SngHandler::OFFSET));
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
	
	//usef for getAvailablePanels and getPanelConfig
	//curl -H "Content-type: application/json" -X POST -d ' {"method": "getAvailablePanels", "params": null, "id": 1}'  $SNG_SERVER_PATH
	private $availablePanels = array (
	    array (
            "panelName" => "Demo 1",
            "id" => 1,
            "configChangeDate" => "2013-09-01T00:32:12"
	            ),
        array (
            "panelName" => "Demo 2",
            "id" => 2,
            "configChangeDate" => "2013-09-01T00:32:12"
        ),
	   
	);
	
	private $panelsConfig = array (
        1 => array (
            array (
                "type" => "main",
                "name" => "config-sngtouchg1.xml",
                ),
            array (
                "type" => "listdetail",
                "name" => "config-base.xml"
                )
            ),
        2 => array (
            array (
                "type" => "main",
                "name" => "config-sngtouchg1.xml",
                ),
            array (
                "type" => "listdetail",
                "name" => "config-base.xml"
                )
            )
    );
	
	public function getAvailablePanels($param) {
        return $this->availablePanels;
	}
	
	//
	public function getConfig($param) {
		if (array_key_exists("id", $param)) {	
	        $panelId = $param["id"];
	        if (array_key_exists($panelId, $this->panelsConfig)) {	
	            $response = array();
	            
	            $panelConfigDef = $this->panelsConfig[$panelId];
	            foreach ($panelConfigDef as $moduleConfigDef) {
                    $mType = $moduleConfigDef["type"];
                    $mName = $moduleConfigDef["name"];
                    $fPath = "./demo-configs/".$panelId."/";
                    if ("main" == $mType) {
                        $fPath .= $mName;
                    }
                    else {
                        $fPath .= "modules/".$mType."/".$mName;
                    }
                    
                    echo "Opening".$fPath." ";
                    $fHandle = fopen($fPath, "r");
                    if (false == $fHandle) {
                        echo "Can't open ".$fPath;
                    }
                    else {
                        $mPartResp = array();
                        $mPartResp["type"] = $mType;
                        $mPartResp["name"] = $mName;
                        $mPartResp["config"] = "";
	                    while (!feof($fHandle)) {
                            $mPartResp["config"] .= fread($fHandle, 8192);
	                    }
                        fclose($fHandle);
                        
                        array_push($response, $mPartResp);
                    }
	            }
                
                return $response;
	        }
	        else {
	            throw new Exception('Invalid panel id '.$panelId);
	        }
		}
		else {
		    throw new Exception('Invalid parameter '.$param[0]);
		}
	}
	
}
?>
