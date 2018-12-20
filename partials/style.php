<style>
@import url(https://fonts.googleapis.com/css?family=Raleway:400,200);

@import url(http://weloveiconfonts.com/api/?family=entypo);

/* entypo */

[class*="entypo-"]:before {
    font-family: 'entypo', sans-serif;
}

/* body {
    font-family: 'Raleway', sans-serif;
    font-weight: 800;
    color: Black;
    margin: 0;
    padding: 0;
    background-color: #000000;
    background-image: url(images/bg.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    box-shadow: inset 0 0 0 1000px rgba(0,0,0,0.8);
} */


h1 {
    font-weight: 200;
}

h2 {
    font-weight: 200;
    width: 50%;
}

h3 {
    font-weight: 200;
}

p {
    font-weight: 200;
}


::selection {
    background: #CFA193;
    /* Safari */
}

::-moz-selection {
    background: #CFA193;
    /* Firefox */
}

header {
    background-color: #94c2cf;
    height: 80px;
    /* position: fixed; */
    margin:0 auto;
    max-width: 80%;
    border-left: 2px dotted #eee;
    border-right: 2px dotted #eee;
}

header .logo {
    font-size: 40px;
    color: white;
    padding: 5px;
    padding-left: 10px;
    float: left;
}

@keyframes Jump {
    from {
        transform: translate(0, 0px);
    }
    50% {
        transform: translate(0, 3px);
    }
    to {
        transform: translate(0, 0px);
    }
}

header .logo:hover {
    animation-name: Jump;
    animation-duration: 2s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;
}

header ul{
    display:inline;
    float:left;
    padding-top: 10px;
}
  
header ul li{
    display:inline;
    color:white;
    padding:30px; 
}
  
header ul a{
    text-decoration:none;
    
    padding:10px 2px 10px 2px;
    
    -webkit-transition: all 500ms ease;
    -moz-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
    -o-transition: all 500ms ease;
    transition: all 500ms ease;
    
}
  
header ul a:hover, .dropdown-content a:hover{
    background-color:#88b2be ;
    padding:10px 20px 10px 20px;
    
    -webkit-transition: all 500ms ease;
    -moz-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
     -o-transition: all 500ms ease;
    transition: all 500ms ease;
    
}


section {
    top: 0px;
    right: 0px;
    bottom: 0px;
    left: 0px;
    padding-top: 1px;
    border-bottom: 1px dotted #D5D5D5;
    padding-bottom: 1px;
}

section .images {
    text-align: center;

    transition: all 500ms ease;
    -moz-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
    -o-transition: all 500ms ease;
    transition: all 500ms ease;
}

.images img {
    width: auto;
}

.wrap {
    background-color: #FFF;
    max-width: 80%;
    margin: 0 auto;
    text-align:left;
    border-left: 2px dotted #eee;
    border-right: 2px dotted #eee;
}

#form{
    margin:100px 0px 0px 480px;
}

.main {
    background-color: #FFF;
    max-width: 80%;
    margin: 0 auto;
    border-left: 2px dotted #eee;
    border-right: 2px dotted #eee;
    padding: 1px 0px 1px 0px;
}


#large_image {
    background-image: url('images/');
    background-position: center center;
    min-height: 400px;
    width: 100%;
}

#hello {
    padding-top: 100px;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);
    margin-left: 40px;
    border-bottom: 0px dotted #D5D5D5;
}

#hello h1 {
    font-weight: 400;
    color: #0fc5f8;
}

#hello p {
    width: 50%;
    font-weight: 400;
    color: #0fc5f8;
    font-size: 16px;
}


.white {
    color: white;
}


#new {
    clear: both;
    min-height: 500px;
}

#text {
    padding-top: 100px;
}

.col-group>div {
    padding: 0.5em 0.5em 0;
}

.me {
    display: block;
    margin: 2em auto;
    margin-bottom: 2em;
    width: 150px;
    height: 150px;
    border-radius: 50%;
}

#about ul {
    text-align: center;
    margin-left: -40px;
}

#about ul li {
    font-size: 50px;
    list-style: none;
    display: inline;
    color: #cccccc;

    transition: all 500ms ease;
    -moz-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
    -o-transition: all 500ms ease;
    transition: all 500ms ease;
}

#about ul li:hover {
    color: #94c2cf;
    cursor: pointer;
    transition: all 500ms ease;
    -moz-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
    -o-transition: all 500ms ease;
    transition: all 500ms ease;
}


#footer {
    background-color: #cccccc;
    color: white;
    text-align: center;
    max-width:80%;
    margin:0 auto;
    border-left: 2px dotted #eee;
    border-right: 2px dotted #eee;
}

@keyframes Jumpy {
    from {
        transform: translate(0, 0px);
    }
    50% {
        transform: translate(0, 10px);
    }
    to {
        transform: translate(0, 0px);
    }
}


#footer #logo_footer {
    width: 38px;
    height: 45px;
    margin-left: auto;
    margin-right: auto;
    border-bottom: 1px solid white;
}


#footer a {
    font-size: 20px;
    color: white;
    padding: 5px;
    padding-left: 3px;
    width: 30px;
    margin: auto;
    float: left;
    color: white;
    text-decoration: none;

    animation-name: Jumpy;
    animation-duration: 2s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;
}

#gif{
    margin: 100px 10px 100px 420px;
}
  
.dropdown {
    position: relative;
    display: inline-block;

}
  
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #94c2cf;
    min-width: 160px;
    margin-top: 30px;
}
  
.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
  
.dropdown:hover .dropdown-content {
    display: block;
}

td{
    padding:30px;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

html {
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica,
    Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}

body {
    background: -webkit-linear-gradient(to right, #061161, #780206);
    background: linear-gradient(to right, #061161, #780206);
}

.albums{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    grid-gap: 10px;
}

.album{
    background: rgba(255,255,255,0.3);
    box-shadow: 0 0 5px rgba(0,0,0,0.1);
    padding: 0 20px;
    display: inline-block;
    grid-template-columns: 150px 1fr;
    align-items: center;
    border-radius: 3px;
}

.album__image{
    width: 100%;
    height: 150px;
    background-color: #cfd4da;
    border-radius: 2px;
}

.album__details{
    padding: 20px;
    color: #fff;
}

.album__title{
    margin-bottom: 0;
    font-weight: 300;
}

.album__artist{
    margin: 0;
    color: #ccc;
    font-size: .8em;
}

.album__description{
    font-size: .9em;
}

</style>