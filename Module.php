<html>
<meta char set="UTF-8"/>
<div id= "MainDiv">
<h1>Demo page</h1>
<body>
<?php
	class Module{

		private $moduleCode;
		private $moduleTitle;
		private $lecturer;

		function setModuleCode($moduleCode){
			$this -> moduleCode = $moduleCode;
		}

		function setModuleTitle($moduleTitle){
			$this -> moduleTitle = $moduleTitle;
		}

		function setLecturer($lecturer){
			$this -> lecturer = $lecturer;
		}

		#get methods will implement database code to retrieve relevant information
		function getModuleCode(){
			echo $this -> moduleCode ."<br/>";
		}
		function getModuleTitle(){
			echo $this -> moduleTitle ."<br/>";
		}
		function getLecturer(){
			echo $this -> lecturer ."<br/>";
		}

	}

		#Instanciating new objects for module
		$webApps = new Module;
		$webApps -> setModuleCode("CM2201");
		$webApps -> getModuleCode();
		$webApps -> setModuleTitle("Web applications");
		$webApps -> getModuleTitle();
		$webApps -> setLecturer("Sidorov");
		$webApps -> getLecturer();

?>
</body>
</div>
</html>
