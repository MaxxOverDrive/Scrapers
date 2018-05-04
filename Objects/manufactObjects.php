<?php

class Manufacturer {
	private $manufactID;
	private $manufactName;
	private $url;
	private $priceList;

	public function __construct($manufactID, $manufactName, $url, $priceList) {
		$this->manufactID = $manufactID;
		$this->manufactName = $manufactName;
		$this->url = $url;
		$this->priceList = $priceList;
	}
	public function setManufactName($x) {
		$this->manufactName = $x;

    }
		public function getManufactName() {
			return $this->manufactName;
		}
}


	$advanceTabco = new Manufacturer("219", $manufactName, "", "");
	$aignerIndex = new Manufacturer("57", $manufactName, "", "manufactPrices/aignerIndex.xlsx");
	$akroFloorMats = new Manufacturer("AKRO FLOOR MATS", "242", "", "");
	$akroMils = new Manufacturer("AKRO-MILS", "217", "", "manufactPrices/akroMils.xlsx");
	$arpac = new Manufacturer("ARPAC", "192", "", "");
	$autoquip = new Manufacturer("AUTOQUIP", "116", "", "");
	$ballymore = new Manufacturer("BALLYMORE", "67", "", "");
	$bayhead = new Manufacturer("BAYHEAD", "111", "", "");
	$belaireCompressors = new Manufacturer("BELAIRE COMPRESSORS", "268", "", "");
	$benchPro = new Manufacturer("BENCHPRO", "233", "", "");
	$bigJoe = new Manufacturer("BIG JOE", "184", "", "");
	$bioFit = new Manufacturer("BIOFIT", "218", "", "");
	$bishamon = new Manufacturer("BISHAMON", "65", "", "");
	$blueGiant = new Manufacturer("BLUE GIANT", "149", "", "");
	$bluff = new Manufacturer("BLUFF", "43", "", "");
	$borroughs = new Manufacturer("BORROUGHS", "96", "http://www.borroughs.com", "");
	$bpManufacturing = new Manufacturer("BP MANUFACTURING", "275", "", "");
	$bradleyCorporation = new Manufacturer("BRADLEY CORPORATION", "162", "", "");
	$brewer = new Manufacturer("BREWER", "271", "", "");
	$budgit = new Manufacturer("BUDGIT", "176", "", "");
	$builtRite = new Manufacturer("BUILT-RITE", "260", "", "");
	$chaseDoors = new Manufacturer("CHASE DOORS", "249", "", "");
	$chester = new Manufacturer("CHESTER", "173", "", "");
	$cm = new Manufacturer("CM", "171", "", "");
	$coffing = new Manufacturer("COFFING", "174", "", "");
	$copperloy = new Manufacturer("COPPERLOY", "133", "", "");
	$cotterman = new Manufacturer("COTTERMAN", "161", "", "");
	$coxreels = new Manufacturer("COXREELS", "270", "", "");
	$dandux = new Manufacturer("DANDUX", "95", "", "");
	$decadeProducts = new Manufacturer("DECADE PRODUCTS", "273", "", "");
	$demag = new Manufacturer("DEMAG", "168", "", "");
	$doosan = new Manufacturer("DOOSAN", "246", "", "");
	$duraShelf = new Manufacturer("DURA-SHELF", "223", "", "");
	$durham = new Manufacturer("DURHAM", "48", "", "manufactPrices/durham.xlsx");
	$dutro = new Manufacturer("DUTRO", "28", "", "");
	$dynaRack = new Manufacturer("DYNA-RACK", "258", "", "");
	$eagle = new Manufacturer("", "", "", "");
	$engineeredProducts = new Manufacturer("ENGINEERED PRODUCTS", "254", "", "");
	$equipto = new Manufacturer("EQUIPTO", "37", "", "");
	$extremeTools = new Manufacturer("EXTREME TOOLS", "266", "", "");
	$ezLift = new Manufacturer("E-ZLIFT", "166", "", "");
	$FEI = new Manufacturer("F.E.I.", "109", "", "");
	$fairbanksCasters = new Manufacturer("FAIRBANKS CASTERS", "134", "", "");
	$flexMaterialHandling = new Manufacturer("FLEX MATERIAL HANDLING", "232", "", "");
	$genie = new Manufacturer("GENIE", "62", "", "");
	$GOFF = new Manufacturer("GOFF", "195", "", "");
	$grovesIncorporated = new Manufacturer("GROVES INCORPORATED", "239", "", "");
	$hWilson = new Manufacturer("H. WILSON", "210", "", "");
	$hallowell = new Manufacturer("HALLOWELL", "151", "", "manufactPrices/hallowell.xlsx");
	$hamiltonCasters = new Manufacturer("HAMILTON CASTERS", "228", "", "manufactPrices/hamiltonCasters.xlsx");
	$handy = new Manufacturer("HANDY", "69", "", "");
	$harperTrucks = new Manufacturer("HARPER TRUCKS", "56", "", "");
	$harrington = new Manufacturer("HARRINGTON", "175", "", "");
	$hilmanRollers = new Manufacturer("HILMAN ROLLERS", "86", "", "");
	$hosetractIndustries = new Manufacturer("HOSETRACT INDUSTRIES", "269", "", "");
	$huskyRackAndWire = new Manufacturer("HUSKY RACK AND WIRE", "125", "", "");
	$IAC = new Manufacturer("IAC", "38", "", "");
	$illinoisEngineered = new Manufacturer("ILLINOIS ENGINEERED", "97", "", "manufactPrices/illinoisEngineered.xlsx");
	$infrapak = new Manufacturer("INFRAPAK", "70", "", "");
	$interthorInc = new Manufacturer("INTERTHOR INC.", "105", "", "manufactPrices/interthor.xlsx");
	$jaken = new Manufacturer("JAKEN", "256", "", "");
	$jamco = new Manufacturer("", "", "", "");
	$jarke = new Manufacturer("JARKE", "61", "", "");
	$jesco = new Manufacturer("JESCO", "54", "", "");
	$jet = new Manufacturer("JET", "85", "", "");
	$ladderIndustries = new Manufacturer("LADDER INDUSTRIES", "68", "", "");
	$lafayetteWireProducts = new Manufacturer("LAFAYETTE WIRE PRODUCTS", "259", "", "");
	$lakeside = new Manufacturer("LAKESIDE", "81", "", "");
	$lewisBins = new Manufacturer("LEWIS BINS", "35", "", "");
	$littleGiant = new Manufacturer("LITTLE GIANT", "82", "http://www.little-giant.com", "manufactPrices/littleGiant.xlsx");
	$louisvilleLadders = new Manufacturer("LOUISVILLE LADDERS", "159", "", "");
	$luxor = new Manufacturer("LUXOR", "131", "", "");
	$lyon = new Manufacturer("LYON", "29", "", "");
	$mallard = new Manufacturer("MALLARD", "123", "", "");
	$marsAirSystems = new Manufacturer("MARS AIR SYSTEMS", "235", "", "");
	$materialFlow = new Manufacturer("MATERIAL FLOW", "32", "", "");
	$mecoOmaha = new Manufacturer("MECO OMAHA", "50", "", "");
	$meese = new Manufacturer("MEESE", "110", "", "");
	$metro = new Manufacturer("METRO", "45", "", "manufactPrices/metro.xlsx");
	$MFG = new Manufacturer("MFG", "107", "", "");
	$midStatesManufacturing = new Manufacturer("MID-STATES MANUFACTURING", "202", "", "");
	$miniMoverConveyors = new Manufacturer("MINI MOVER CONVEYORS", "93", "", "");
	$mobile = new Manufacturer("MOBILE", "207", "", "");
	$morse = new Manufacturer("MORSE", "47", "", "");
	$nascoIndustries = new Manufacturer("NASCO INDUSTRIES", "265", "", "");
	$nashvilleWire = new Manufacturer("NASHVILLE WIRE", "212", "", "");
	$newLondon = new Manufacturer("NEW LONDON", "88", "", "");
	$nordock = new Manufacturer("NORDOCK", "248", "", "");
	$notrax = new Manufacturer("NOTRAX", "241", "", "");
	$nutting = new Manufacturer("NUTTING", "141", "", "");
	$olympic = new Manufacturer("OLYMPIC", "247", "", "");
	$orbis = new Manufacturer("", "", "", "");
	$parent = new Manufacturer("PARENT", "250", "", "");
	$pFlow = new Manufacturer("PFLOW", "191", "", "");
	$phillocraft = new Manufacturer("PHILLOCRAFT", "267", "", "");
	$pioneer = new Manufacturer("PIONEER", "77", "", "");
	$pollard = new Manufacturer("POLLARD", "203", "", "");
	$portaFab = new Manufacturer("PORTAFAB", "101", "", "");
	$powerStorage = new Manufacturer("POWER STORAGE", "255", "", "");
	$prestoLifts = new Manufacturer("PRESTO LIFTS", "49", "", "");
	$proLine = new Manufacturer("PRO-LINE", "263", "", "");
	$pucel = new Manufacturer("PUCEL", "213", "", "");
	$quantum = new Manufacturer("QUANTUM", "36", "", "");
	$quikPik = new Manufacturer("QUIKPIK", "126", "", "");
	$RM = new Manufacturer("R&M", "169", "", "");
	$railex = new Manufacturer("RAILEX", "145", "", "");
	$ralphsPugh = new Manufacturer("RALPHS-PUGH", "143", "", "");
	$raymond = new Manufacturer("RAYMOND", "119", "", "");
	$redSteel = new Manufacturer("RED STEEL", "257", "", "");
	$reelCraft = new Manufacturer("REELCRAFT", "224", "", "");
	$richardsWilcox = new Manufacturer("RICHARDS-WILCOX", "99", "", "");
	$roachConveyors = new Manufacturer("ROACH CONVEYORS", "63", "", "");
	$rollAway = new Manufacturer("ROLL-A-WAY", "89", "", "");
	$rotaryProducts = new Manufacturer("ROTARY PRODUCTS", "135", "", "");
	$rousseau = new Manufacturer("ROUSSEAU", "204", "", "");
	$royal = new Manufacturer("ROYAL", "41", "", "");
	$safco = new Manufacturer("SAFCO", "200", "", "");
	$sandusky = new Manufacturer("SANDUSKY", "139", "", "");
	$scotlandRack = new Manufacturer("SCOTLAND RACK", "237", "", "");
	$singerSafety = new Manufacturer("SINGER SAFETY", "196", "", "");
	$southworth = new Manufacturer("SOUTHWORTH", "229", "", "");
	$spanTrack = new Manufacturer("SPAN-TRACK", "128", "", "");
	$spanco = new Manufacturer("SPANCO", "83", "", "");
	$spantech = new Manufacturer("SPANTECH", "154", "", "");
	$ssiSchaefer = new Manufacturer("SSI SCHAEFER", "252", "", "");
	$stackBin = new Manufacturer("STACKBIN", "80", "", "");
	$stanleyVidmar = new Manufacturer("STANLEY VIDMAR", "234", "", "");
	$steeleCanvasBasket = new Manufacturer("STEELE CANVAS BASKET", "274", "", "");
	$stromberg = new Manufacturer("STROMBERG", "27", "", "");
	$tennsco = new Manufacturer("TENNSCO", "46", "", "");
	$theBigRackShack = new Manufacturer("THE BIG RACK SHACK", "262", "", "");
	$thernInc = new Manufacturer("THERN INC.", "178", "", "");
	$topLineContainers = new Manufacturer("TOP LINE CONTAINERS", "272", "", "");
	$topperIndustrial = new Manufacturer("TOPPER INDUSTRIAL", "106", "", "");
	$tractel = new Manufacturer("TRACTEL", "165", "", "");
	$treston = new Manufacturer("TRESTON", "264", "", "");
	$triLiteMars = new Manufacturer("TRI LITE MARS", "71", "", "");
	$triBoro = new Manufacturer("TRI-BORO", "251", "", "");
	$tripleDiamond = new Manufacturer("TRIPLE DIAMOND", "240", "", "");
	$triton = new Manufacturer("TRITON", "199", "", "");
	$unirak = new Manufacturer("UNIRAK", "261", "", "");
	$valleyCraft = new Manufacturer("VALLEY CRAFT", "31", "", "manufactPrices/valleyCraft.xlsx");
	$vestil = new Manufacturer("VESTIL", "34", "", "manufactPrices/vestil.xlsx");
	$wearWell = new Manufacturer("WEARWELL", "64", "", "");
	$webb = new Manufacturer("WEBB", "144", "", "");
	$wesco = new Manufacturer("WESCO", "30", "http://www.wesco.com", "");
	$wesley = new Manufacturer("WESLEY", "66", "", "");
	$wisconsinBenchManufacturing = new Manufacturer("WISCONSIN BENCH MANUFACTURING", "209", "", "");


	}
mysqli_close($conn);
?>
?>
