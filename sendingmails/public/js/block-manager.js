import { header01 } from "./blocks/headers/header-01";




const editor = grapesjs.init({
    height: "100%",
    container: "#gjs",
    showOffsets: true,
    fromElement: true,
    noticeOnUnload: false,
    storageManager: false,

    // storageManager: {
    //     type: 'local', // Type of the storage, available: 'local' | 'remote'
    //     autosave: true, // Store data automatically
    //     autoload: true, // Autoload stored data on init
    //     stepsBeforeSave: 1, // If autosave enabled, indicates how many changes are necessary before store method is triggered
    //     options: {
    //         local: { // Options for the `local` type
    //             key: 'gjsProject', // The key for the local storage
    //         },
    //     }
    // }
});

editor.BlockManager.add("my-block-id-1", {
    category: "Headers",
    label: `<header>
	<div class="overlay">
<h1>Simply The Best</h1>
<h3>Reasons for Choosing US</h3>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero nostrum quis, odio veniam itaque ullam debitis qui magnam consequatur ab. Vero nostrum quis, odio veniam itaque ullam debitis qui magnam consequatur ab.</p>
	<br>
	<button>READ MORE</button>
		</div>
</header>
<style>
    *{padding: 0; margin: 0; box-sizing: border-box;}
body{height: 100px;}
header {
	background: url('http://www.autodatz.com/wp-content/uploads/2017/05/Old-Car-Wallpapers-Hd-36-with-Old-Car-Wallpapers-Hd.jpg');
	text-align: center;
	width: 100%;
	height: 100px;
	background-size: cover;
	background-attachment: fixed;
	position: relative;
	overflow: hidden;
	border-radius: 0 0 85% 85% / 30%;
}
header .overlay{
	width: 100%;
	height: 100%;
	padding: 50px;
	color: #FFF;
	text-shadow: 1px 1px 1px #333;
  background-image: linear-gradient( 135deg, #9f05ff69 10%, #fd5e086b 100%);
	
}

h1 {
	font-family: 'Dancing Script', cursive;
	font-size: 80px;
	margin-bottom: 30px;
}

h3, p {
	font-family: 'Open Sans', sans-serif;
	margin-bottom: 30px;
}

button {
	border: none;
	outline: none;
	padding: 10px 20px;
	border-radius: 50px;
	color: #333;
	background: #fff;
	margin-bottom: 50px;
	box-shadow: 0 3px 20px 0 #0000003b;
}
button:hover{
	cursor: pointer;
}
</style>`,
    content: `
    <header>
	<div class="overlay">
<h1>Simply The Best</h1>
<h3>Reasons for Choosing US</h3>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero nostrum quis, odio veniam itaque ullam debitis qui magnam consequatur ab. Vero nostrum quis, odio veniam itaque ullam debitis qui magnam consequatur ab.</p>
	<br>
	<button>READ MORE</button>
		</div>
</header>
<style>
    *{padding: 0; margin: 0; box-sizing: border-box;}
body{height: 900px;}
header {
	background: url('http://www.autodatz.com/wp-content/uploads/2017/05/Old-Car-Wallpapers-Hd-36-with-Old-Car-Wallpapers-Hd.jpg');
	text-align: center;
	width: 100%;
	height: auto;
	background-size: cover;
	background-attachment: fixed;
	position: relative;
	overflow: hidden;
	border-radius: 0 0 85% 85% / 30%;
}
header .overlay{
	width: 100%;
	height: 100%;
	padding: 50px;
	color: #FFF;
	text-shadow: 1px 1px 1px #333;
  background-image: linear-gradient( 135deg, #9f05ff69 10%, #fd5e086b 100%);
	
}

h1 {
	font-family: 'Dancing Script', cursive;
	font-size: 80px;
	margin-bottom: 30px;
}

h3, p {
	font-family: 'Open Sans', sans-serif;
	margin-bottom: 30px;
}

button {
	border: none;
	outline: none;
	padding: 10px 20px;
	border-radius: 50px;
	color: #333;
	background: #fff;
	margin-bottom: 50px;
	box-shadow: 0 3px 20px 0 #0000003b;
}
button:hover{
	cursor: pointer;
}
</style>`,
});
editor.BlockManager.add("my-block-id", {
    category: "Headers",
    label: `<header class="header">
	<div class="brand-box">
		<span class="brand">Example Brand</span>
	</div>
	
	<div class="text-box">
		<h1 class="heading-primary">
			<span class="heading-primary-main">Heading Primary Main</span>
			<span class="heading-primary-sub">The secondary heading</span>
		</h1>
		<a href="#" class="btn btn-white btn-animated">Discover our tours</a>
	</div>
</header>
<style>
body {
  	font-family: 'Lato', sans-serif;
  	font-weight: 400;
  	font-size: 16px;
  	line-height: 1.7;
  	color: #eee;
}

.header {
  	height: 100px;
  	background-image: 
	  linear-gradient(to right bottom, 
     rgba(76, 216, 255, 0.8),
     rgba(30, 108, 217, 0.8)),
     url('https://images.pexels.com/photos/213399/pexels-photo-213399.jpeg');
  	
	background-size: cover;
  	background-position: top;
  	position: relative;

  	clip-path: polygon(0 0, 100% 0, 100% 75vh, 0 100%);
}

.brand-box {
  	position: absolute;
  	top: 40px;
  	left: 40px;
}

.brand { font-size: 20px; }

.text-box {
  	position: absolute;
  	top: 50%;
  	left: 50%;
  	transform: translate(-50%, -50%);
  	text-align: center;
}

.heading-primary {
  	color: #fff;
  	text-transform: uppercase;

  	backface-visibility: hidden;
  	margin-bottom: 30px;
}

.heading-primary-main {
  	display: block;
  	font-size: 26px;
  	font-weight: 400;
  	letter-spacing: 5px;
}

.heading-primary-sub {
  	display: block;
  	font-size: 18px;
  	font-weight: 700;
  	letter-spacing: 7.4px;
}

.btn:link,
.btn:visited {
  	text-transform: uppercase;
  	text-decoration: none;
  	padding: 10px 20px;
  	display: inline-block;
  	border-radius: 100px;
  	transition: all .2s;
  	position: relative;
}

.btn:hover {
  	transform: translateY(-3px);
  	box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.btn:active {
  	transform: translateY(-1px);
  	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.btn-white {
  	background-color: #fff;
  	color: #777;
	font-size: 14px;
}
</style>`,
    content: `<header class="header">
	<div class="brand-box">
		<span class="brand">Example Brand</span>
	</div>
	
	<div class="text-box">
		<h1 class="heading-primary">
			<span class="heading-primary-main">Heading Primary Main</span>
			<span class="heading-primary-sub">The secondary heading</span>
		</h1>
		<a href="#" class="btn btn-white btn-animated">Discover our tours</a>
	</div>
</header>

<style>
body {
  	font-family: 'Lato', sans-serif;
  	font-weight: 400;
  	font-size: 16px;
  	line-height: 1.7;
  	color: #eee;
}

.header {
  	height: 100vh;
  	background-image: 
	  linear-gradient(to right bottom, 
     rgba(76, 216, 255, 0.8),
     rgba(30, 108, 217, 0.8)),
     url('https://images.pexels.com/photos/213399/pexels-photo-213399.jpeg');
  	
	background-size: cover;
  	background-position: top;
  	position: relative;

  	clip-path: polygon(0 0, 100% 0, 100% 75vh, 0 100%);
}

.brand-box {
  	position: absolute;
  	top: 40px;
  	left: 40px;
}

.brand { font-size: 20px; }

.text-box {
  	position: absolute;
  	top: 50%;
  	left: 50%;
  	transform: translate(-50%, -50%);
  	text-align: center;
}

.heading-primary {
  	color: #fff;
  	text-transform: uppercase;

  	backface-visibility: hidden;
  	margin-bottom: 30px;
}

.heading-primary-main {
  	display: block;
  	font-size: 26px;
  	font-weight: 400;
  	letter-spacing: 5px;
}

.heading-primary-sub {
  	display: block;
  	font-size: 18px;
  	font-weight: 700;
  	letter-spacing: 7.4px;
}

.btn:link,
.btn:visited {
  	text-transform: uppercase;
  	text-decoration: none;
  	padding: 10px 20px;
  	display: inline-block;
  	border-radius: 100px;
  	transition: all .2s;
  	position: relative;
}

.btn:hover {
  	transform: translateY(-3px);
  	box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.btn:active {
  	transform: translateY(-1px);
  	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.btn-white {
  	background-color: #fff;
  	color: #777;
	font-size: 14px;
}
</style>`,
});
editor.BlockManager.add("my-block-id-2", {
    category: "Basics",
    label: "Image",
    media: `<svg style="width:24px;height:24px" viewBox="0 0 24 24">
            <path d="M8.5,13.5L11,16.5L14.5,12L19,18H5M21,19V5C21,3.89 20.1,3 19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19Z" />
        </svg>`,
    // Use `image` component
    content: { type: "image" },
    // The component `image` is activatable (shows the Asset Manager).
    // We want to activate it once dropped in the canvas.
    activate: true,
});
