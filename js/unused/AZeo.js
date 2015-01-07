(function(){
	var app=angular.module('AZeo',[]);

	app.controller('LandingController',function(){

	});

	app.controller('GalleryController',function(){

	});

	app.controller('ThemeController',function(){
			this.pics=theme;
	});

	app.controller('MenuController',function(){
			this.tab=1;

			this.selectTab=function(setTab) {
				this.tab=setTab;
			};

			this.isSelected=function(checkTab){
				return this.tab===checkTab;
			};
	}); 

	var theme=[
		{	
			name:"Dodecahedron",
			price:2.95,
			description:"Some gems have hidden qualities beyond their luster",
			canPurchase: true,
			soldOut: false,
			images:[
					"images/9.png"
				]
		},
		{
			name:"Pentagonal Gem",
			price:5.95,
			description:"Some gems are not good",
			canPurchase: false,
			images:[
					"../images/10.png"
				]
		}
	];
})();