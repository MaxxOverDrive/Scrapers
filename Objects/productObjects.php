<?php





class item {
	public $classID;
	public $manufactID;
	public $partClassName;
	public $partCatID;
	public $catID;
	Public $partCatName;
	public $partID;
	public $name;
	public $partPrice;

	public function __construct($classID, $manufactID, $partClassName, $partCatID, $catID, $partCatName, $partID, $name, $partPrice) {
		$this->classID = $classID;
		$this->manufactID = $manufactID;
		$this->partClassName = $partClassName;
		$this->partCatID = $partCatID;
		$this->catID = $catID;
		$this->partCatName = $partCatName;
		$this->partID = $partID;
		$this->name = $name;
		$this->partPrice = $partPrice;
	}

	public function compare() {
        return "Your best selling item is " . $this->itemName . " " . "with a Model Number of " . $this->modelNum . " and a Part Number of " . $this->partNum . " at a Sales Price of " . $this->price . ".";
    }
}
?>
