/*Start define Angular App and Modules of Angular myApp*/
var myApp = angular.module("myApp", [
    'ngRoute',            //Declare ngRoute
    'ui.bootstrap',
    'ngAnimate',
    'contactForm',        //Declare Module contact
    'login',              //Declare Module login
    'checkForm',          //Declare Module checkForm
    'photography',        //Declare Module photography
    'productDetail',      //Declare Module productDetail
    'factory',            //Declare Module factory
    'top',                //Declare Module top
    'new',                //Declare Module new
    'greetingcard',       //Declare Module greetingcard
    'wrappaper',          //Declare Module wrappaper
    'giftbag',            //Declare Module giftbag
    'anniversary',        //Declare Module anniversary
    'birthday',           //Declare Module birthday
    'friendship',         //Declare Module friendship
    'congratulation',     //Declare Module congratulation
    'mothersday',         //Declare Module mothersday
    'newyear',            //Declare Module newyear
    'menu'                //Declare Module menu
]);
/* End define Angular App and Modules of Angular myApp*/

/* Begin define Url for Templates*/
myApp.config(function($routeProvider,$locationProvider) {
    $routeProvider
        .when("/",{ 
            templateUrl:"home.html", 
            controller:"home"
        })
        .when("/about-us",{
            templateUrl:"about-us.html"
        })
        .when("/sitemap",{
            templateUrl:"sitemap.html"
        })
        .when("/contact-form",{
            templateUrl:"contact-form.html", 
            controller:"contactForm"
        })
        .when("/event",{
            templateUrl:"event.html"
        })
        .when("/faqs",{
            templateUrl:"faqs.html"
        })
        .when("/login",{
            templateUrl:"login.html", 
            controller:"login"
        })
        .when("/check-form",{
            templateUrl:"check-form.html",
            controller:"login",
            controller:"checkForm"
        })
        .when("/photography",{
            templateUrl:"photography.html", 
            controller:"photography"
        })
        .when("/privacy",{
            templateUrl:"privacy.html"
        })
        .when("/shop-cart",{
            templateUrl:"shop-cart.html", 
            controller:"shopCart"
        })
        
        .when("/product-detail/:id",{
            templateUrl:"product-detail.html", 
            controller:"productDetail",
            controller:"top" 
        })
        .when("/shop-products",{
            templateUrl:"shop-products.html"
        })
        .when("/anniversary",{
            templateUrl:"shop-products.html",
            controller:"anniversary"
        })
        .when("/birthday",{
            templateUrl:"shop-products.html",
            controller:"birthday"
        })
        .when("/friendship",{
            templateUrl:"shop-products.html",
            controller:"friendship"
        })
        .when("/congratulation",{
            templateUrl:"shop-products.html",
            controller:"congratulation"
        })
        .when("/mothersday",{
            templateUrl:"shop-products.html",
            controller:"mothersday"
        })
        .when("/newyear",{
            templateUrl:"shop-products.html",
            controller:"newyear"
        })
        .when("/greetingcard",{
            templateUrl:"shop-products.html",
            controller:"greetingcard"
        })
        .when("/wrappaper",{
            templateUrl:"shop-products.html",
            controller:"wrappaper"
        })
        .when("/giftbag",{
            templateUrl:"shop-products.html",
            controller:"giftbag"
        })
        .when("/shop-standard",{
            templateUrl:"shop-standard.html", 
            controller:"shopStandard"
        })
        .when("/term-condition",{
            templateUrl:"term-condition.html"
        })
        .otherwise({
            redirectTo: '/'
        });
    });
/* End define Url to Templates*/

/* Visitor count = reload-page count */
$.getJSON("https://api.countapi.xyz/hit/localhost81818181818/visits", function(response) {
    $("#visits").text(response.value);
});

myApp.directive('flexslider', function () {
    return {
        link: function (scope, element, attrs) {
          
          element.flexslider({
            animation: "slide"
          });
        }
    }
});

/* get geolocation for scrolling ticker */
myApp.controller('ticker', function($scope){
    $scope.date = new Date();
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position){
          $scope.$apply(function(){
            $scope.position = position;
          });
        });
      }
});

//add products to cart
//if cart has products in array, quantity+1
//else add to cart  
myApp.controller("addCart", ['$scope','$http', function($scope){
    $scope.reloadPage = function(){window.location.reload();}  
    $scope.cart = [];
    $scope.addToCart = function(product){
        
        var index = $scope.cart.indexOf(product);
        if(index == -1){
            product.quantity = 1;

            $scope.cart.push(product);
        }else{
            $scope.cart[index].quantity += 1;
        };
        $scope.total2=0;
        for (var i=0; i< $scope.cart.length;i++){
            $scope.total2+= $scope.cart[i].quantity; 
        };
        localStorage.setItem('cart', JSON.stringify($scope.cart));
        
    };
}]);

/* Define module menu get path() */
angular.module("menu", [])
.controller("MainCtrl",['$scope','$location','$route',function($scope, $location,$route) {
    $scope.activePath = null;
    $scope.$on('$routeChangeSuccess', function(){
        $scope.activePath = $location.path();
    })
}]);

/* Define module login*/
angular.module("login", []).controller("login", ['$scope','$location', function($scope,$location){
    $scope.sendMess = function(){
        return null;
    }
}]);

/* Define module contactForm*/
angular.module("contactForm", []).controller("contactForm", ['$scope','$location', function($scope,$location){
    $scope.sendMess = function(){
        $location.path('/check-form');
    }
}]);

/* Define module checkForm*/
angular.module("checkForm", []).controller('checkForm', ['$scope', '$http', function ($scope) {
    $scope.today = new Date().getDate();
    $scope.month = new Date().getMonth()+1;
    $scope.curentyear = new Date().getFullYear();
}]);

/* Define module photography*/
angular.module("photography", []).controller("photography", ['$scope','$http', function($scope,$http){

    $scope.products = [];
    $scope.pageSize = 8;
    $scope.currentPage = 1;

    $http({
        method: "GET",
        url: "data/products.json"
    })
    .then(function(response){
        $scope.products = response.data;
    });
}]);

/* Define module shopCart*/
myApp.controller("shopCart", ['$scope','$http', function($scope,$http){
        
    var successCallBack = function(response){
        $scope.products = response.data;
    };
    var errorCallBack = function(response){
        $scope.error = response.data;
    };

    $http({
        method: "GET",
        url: "data/products.json"
    })
    .then(successCallBack, errorCallBack);
    //get value from localstorage
    $scope.carts = JSON.parse(localStorage.getItem('cart'));
    //delete products from cart
    $scope.removeFromCart = function(product){
        var index = $scope.carts.indexOf(product);
        $scope.carts.splice(index, 1);
        localStorage.setItem('cart', JSON.stringify($scope.carts));
    };
    
    //sum money function
    $scope.totalPrice = function(){
        var total = 0;
        for(var i = 0; i < $scope.carts.length; i++){
            var product = $scope.carts[i];
            total += (product.price * product.quantity);
        }
        return total;
    };
    $scope.total1 = 0;
    for(var i = 0; i < $scope.carts.length; i++){
        $scope.total1 += $scope.carts[i].quantity;
    };
    localStorage.setItem('total', JSON.stringify($scope.total1));
}]);

/* Define module shopStandard*/
myApp.controller("shopStandard", ['$scope','$http', function($scope,$http){

    $scope.products = [];
    $scope.pageSize = 6;
    $scope.currentPage = 1;

    $http({
        method: "GET",
        url: "data/products.json"
    })
    .then(function(response){
        $scope.products = response.data;
    });
}]);

myApp.filter('startFrom', function() {
    return function(data, start) {
        if (!data || !data.length) { return; }
        start = +start; //parse to int
        return data.slice(start);
    }
});

/* Define module proDetail*/
angular.module("productDetail", []).controller("productDetail", ['$scope','$http','$filter', '$routeParams', function($scope,$http, $filter, $routeParams){
    $scope.productId=$routeParams.id;
    $http({
        method: "GET",
        url: "data/products.json"
    })
    .then(function(response){
        $scope.product = $filter('filter')(response.data,{id: parseInt($scope.productId)}, true)[0];
    })
}]);

/* Define module factory*/
angular.module('factory',[])
    .factory('factorygetdata',function($http){
        var getdata={};
        getdata.getproducts=function(){
            return $http.get("data/products.json");
        }
        return getdata;
    });

/* Define module top*/
angular.module("top",[])
.controller("top",function($scope,factorygetdata){
    factorygetdata.getproducts().then(function(response){
        $scope.producttop=[];
        angular.forEach(response.data,function(product){
            if(product.topImage == true){
                $scope.producttop.push(product);
            }
        });
    });
});

/* Define module new*/
angular.module("new",[])
.controller("new",function($scope,factorygetdata){
    factorygetdata.getproducts().then(function(response){
        $scope.productnew=[];
        angular.forEach(response.data,function(product){
            if(product.new == true){
                $scope.productnew.push(product);
            }
        });
    });
});

/* Define module home*/
myApp.controller("home",function($scope,factorygetdata){
    factorygetdata.getproducts().then(function(response){
        $scope.producttop=[];
        $scope.productnew=[];
        angular.forEach(response.data,function(products){
            if(products.topImage == true){
                $scope.producttop.push(products);
            }
            if(products.new == true){
                $scope.productnew.push(products);
            }
        });
    });
});

/* Define module greetingcard*/
angular.module("greetingcard",[])
.controller("greetingcard",function($scope,factorygetdata){
    factorygetdata.getproducts().then(function(response){
        $scope.title="Greeting Card";
        $scope.description="Our website hosts a curated selection of a few of our favorite designs. Check back frequently for updates and additions. Until then, head to a retailer near you to shop for hundreds more!";
        $scope.productslist=[];
        $scope.pageSize = 6;
        $scope.currentPage = 1;
        angular.forEach(response.data,function(product){
            if(product.tag=="Greeting Card"){
                $scope.productslist.push(product);
            }
        });
    });
});

/* Define module wrappaper*/
angular.module("wrappaper",[])
.controller("wrappaper",function($scope,factorygetdata){
    factorygetdata.getproducts().then(function(response){
        $scope.title="Wrapping Paper";
        $scope.description="Suitable for every occasion, we have birthday wrapping papers, wedding gift wraps, and neutral and simplistic designs suited for anniversaries, new babies, new jobs, new homes, engagements, and more.";
        $scope.productslist=[];
        $scope.pageSize = 6;
        $scope.currentPage = 1;
        angular.forEach(response.data,function(product){
            if(product.tag=="Wrapping Paper"){
                $scope.productslist.push(product);
            }
        });
    });
});

/* Define module boxcard*/
angular.module("giftbag",[])
.controller("giftbag",function($scope,factorygetdata){
    factorygetdata.getproducts().then(function(response){
        $scope.title="Gift Bag";
        $scope.description="Available in a variety of prints, our bags are suited for birthdays, weddings, engagements, new baby arrival, or any other occasion";
        $scope.productslist=[];
        $scope.pageSize = 6;
        $scope.currentPage = 1;
        angular.forEach(response.data,function(product){
            if(product.tag=="Gift Bag"){
                $scope.productslist.push(product);
            }
        });
    });
});

/* Define module anniversary*/
angular.module("anniversary",[])
.controller("anniversary",function($scope,factorygetdata){
    factorygetdata.getproducts().then(function(response){
        $scope.title="Anniversary";
        $scope.description="Celebrate wedding anniversaries with one of our Happy Anniversary cards! Whether you’re wishing a happy anniversary to your husband, wife, parents, sister, brother, or any other relatives."
        $scope.productslist=[];
        $scope.pageSize = 6;
        $scope.currentPage = 1;
        angular.forEach(response.data,function(product){
            if(product.cat=="Anniversary"){
                $scope.productslist.push(product);
            }
        });
    });
});

/* Define module birthday*/
angular.module("birthday",[])
.controller("birthday",function($scope,factorygetdata){
    factorygetdata.getproducts().then(function(response){
        $scope.title="Birthday";
        $scope.description="Our cards come in many styles and themes, meaning you can deliver thoughtful or funny birthday cards that are perfect for their special day."
        $scope.productslist=[];
        $scope.pageSize = 6;
        $scope.currentPage = 1;
        angular.forEach(response.data,function(product){
            if(product.cat=="Birthday"){
                $scope.productslist.push(product);
            }
        });
    });
});


/* Define module friendship*/
angular.module("friendship",[])
.controller("friendship",function($scope,factorygetdata){
    factorygetdata.getproducts().then(function(response){
        $scope.title="Friendship";
        $scope.description="Friendship cards. Stay connected by sending a postcard to a friend or creating a handmade card for friends no matter the distance.";
        $scope.productslist=[];
        $scope.pageSize = 6;
        $scope.currentPage = 1;
        angular.forEach(response.data,function(product){
            if(product.cat=="Friendship"){
                $scope.productslist.push(product);
            }
        });
    });
});

/* Define module congratulation*/
angular.module("congratulation",[])
.controller("congratulation",function($scope,factorygetdata){
    factorygetdata.getproducts().then(function(response){
        $scope.title="Congratulation";
        $scope.description="Has your friend passed his or her driving test? Has a family member passed an exam? Or has your colleague got a new job or promotion? You’ll be able to find the perfect card to tell them ‘Well done’.";
        $scope.productslist=[];
        $scope.pageSize = 6;
        $scope.currentPage = 1;
        angular.forEach(response.data,function(product){
            if(product.cat=="Congratulation"){
                $scope.productslist.push(product);
            }
        });
    });
});

/* Define module mothersday*/
angular.module("mothersday",[])
.controller("mothersday",function($scope,factorygetdata){
    factorygetdata.getproducts().then(function(response){
        $scope.title="Mother's Day";
        $scope.description="Send your Mum the perfect Mother’s Day card this Mothering Sunday! Thank her for everything she has done for you with a beautiful and thoughtful card available in a variety of modern and traditional designs.";
        $scope.productslist=[];
        $scope.pageSize = 6;
        $scope.currentPage = 1;
        angular.forEach(response.data,function(product){
            if(product.cat=="Motherday"){
                $scope.productslist.push(product);
            }
        });
    });
});

/* Define module newyear*/
angular.module("newyear",[])
.controller("newyear",function($scope,factorygetdata){
    factorygetdata.getproducts().then(function(response){
        $scope.title="New Year";
        $scope.description="New Year is the time or day currently at which a new calendar year begins and the calendar's year count increments by one. Check out for more designs";
        $scope.productslist=[];
        $scope.pageSize = 6;
        $scope.currentPage = 1;
        angular.forEach(response.data,function(product){
            if(product.cat=="New Year"){
                $scope.productslist.push(product);
            }
        });
    });
});

function feedBack() {
    alert("Thanks for your feedback!");
  }

function registerForm() {
    alert("Your account has been created!");
  }

function signUpForm() {
    alert("Login successful!");
  }
function checkoutCart(){
    alert("Your order has been placed!");
}