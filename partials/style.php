<style>
@import url(https://fonts.googleapis.com/css?family=Raleway:400,200);

@import url(http://weloveiconfonts.com/api/?family=entypo);

/* entypo */

[class*="entypo-"]:before {
    font-family: 'entypo', sans-serif;
}

body {
    font-family: 'Raleway', sans-serif;
    font-weight: 800;
    margin: 0;
    padding: 0;
    line-height: 1.42em;
    color:black;
    background-image: url(images/bg.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    box-shadow: inset 0 0 0 1000px rgba(0,0,0,0.8);
}


header {
    background-color: crimson;
    height: 100px;
    margin:0 auto;
    max-width: 80%;
    border-left: 2px dotted #eee;
    border-right: 2px dotted #eee;
}

header .logo {
    font-size: 40px;
    color: white;
    padding: 30px 0px 0px 70px;
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
    padding-top: 15px;
}
  
header ul li{
    display:inline;
    color:white;
    padding:30px; 
}
  
header ul a{
    text-decoration:none;
    padding:10px 2px 10px 2px;
    transition: all 500ms ease; 
}
  
header ul a:hover, .dropdown-content a:hover, #log:hover{
    background-color:#2C3446 ;
    padding:10px 20px 8px 20px;
    transition: all 500ms ease;
}


section {
    top: 0px;
    right: 0px;
    bottom: 0px;
    left: 0px;
    padding-top: 1px;
    border-bottom: 1px dotted #D5D5D5;
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
    margin:100px 0px 0px 550px;
}

.main {
    background-color: #FFF;
    max-width: 80%;
    margin: 0 auto;
    border-left: 2px dotted #eee;
    border-right: 2px dotted #eee;
    padding: 1px 0px 1px 0px;
}



#hello {
    padding-top: 100px;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);
    margin-left: 40px;
    border-bottom: 0px dotted #D5D5D5;
}

#hello h1 {
    font-weight: 400;
    color: crimson;
}

#hello p {
    width: 50%;
    font-weight: 400;
    color: crimson;
    font-size: 16px;
}


.white {
    color: white;
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
}

#about ul li:hover {
    color: crimson;
    cursor: pointer;
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
    background-color: crimson;
    min-width: 160px;
    margin-top: 28px;
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

h1 {
    font-size:3em; 
    font-weight: 300;
    line-height:1em;
    text-align: center;
    color: crimson;
}

h2 {
    font-size:1em; 
    font-weight: 300;
    text-align: center;
    display: block;
    line-height:1em;
    padding-bottom: 2em;
    color: crimson;
}

h2 a {
    font-weight: 700;
    text-transform: uppercase;
    color: crimson;
    text-decoration: none;
}

.container th h1 {
    font-weight: bold;
    font-size: 1em;
    text-align: left;
    color: crimson;
}

.container td {
    font-weight: normal;
    font-size: 1em;
    box-shadow: 0 2px 2px -2px #0E1119;
    color:white;
}

.container {
    text-align: left;
    overflow: hidden;
    width: 100%;
    margin: 0 auto;
    display: table;
    padding: 0 0 8em 0;
}

.container td, .container th {
    padding-bottom: 2%;
    padding-top: 2%;
    padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
    background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
    background-color: #2C3446;
}

.container th {
    background-color: #1F2739;
}

.container td:first-child { color: crimson; }

.container tr:hover {
    background-color: #464A52;
    box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
    background-color: crimson;
    color: white;
    font-weight: bold;
    box-shadow: #cdcfd42e -1px 1px, crimson -2px 2px, crimson -3px 3px, crimson -4px 4px, crimson -5px 5px, crimson -6px 6px;
    transform: translate3d(6px, -6px, 0);
  
    transition-delay: 0s;
    transition-duration: 0.4s;
    transition-property: all;
    transition-timing-function: line;
}
img{
    width:200px;
    height:150px;
}
a{
    color:white;
    text-decoration:none;
}



.album{
    background: rgba(255,255,255,0.3);
    box-shadow: 0 0 5px rgba(0,0,0,0.1);
    padding: 0 20px;
    display: inline-block;
    margin:30px 0 50px 50px;
}

.album__image{
    width: 100%;
    height: 150px;
    background-color: #cfd4da;
    border-radius: 2px;
}

</style>