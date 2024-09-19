export default (editor, opts) => {
    const addHeader = (id, def) => {
        opts.headers.indexOf(id) >= 0 &&
            editor.BlockManager.add(
                id,
                Object.assign(
                    Object.assign({ select: true, category: "Headers" }, def),
                    opts.header(id)
                )
            );
    };
    addHeader("header-01", {
        label: "Simply The Best",
        media: `<header>
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
header {
	background: url('https://i.pinimg.com/564x/c5/d9/6f/c5d96fd3875cec51c73b7a37414f099e.jpg');
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
	height: 100px;
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
        content: `<header style="width: 100%;text-align: center;padding: 0;margin: 0;box-sizing: border-box; background-image: linear-gradient( 135deg, #9f05ff69 10%, #fd5e086b 100%);">
	<div class="overlay" style="background-image: linear-gradient( 135deg, #9f05ff69 10%, #fd5e086b 100%);width: 100%;height: 100%;padding: 50px;color: #FFF;text-shadow: 1px 1px 1px #333; ">
<h1 style="margin-bottom: 30px;font-size: 80px;font-family: 'Dancing Script', cursive;">Simply The Best</h1>
<h3 style="margin-bottom: 30px;font-family: 'Open Sans', sans-serif;">Reasons for Choosing US</h3>
<p style="margin-bottom: 30px;font-family: 'Open Sans', sans-serif;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero nostrum quis, odio veniam itaque ullam debitis qui magnam consequatur ab. Vero nostrum quis, odio veniam itaque ullam debitis qui magnam consequatur ab.</p>
	<br>
	<button style="box-shadow: 0 3px 20px 0 #0000003b;margin-bottom: 50px;background: #fff;color: #333;border-radius: 50px;border: none;outline: none;padding: 10px 20px;" >READ MORE</button>
		</div>
</header>`,
style:{
	"background-image": "linear-gradient( 135deg, #9f05ff69 10%, #fd5e086b 100%)",
}

// *{padding: 0; margin: 0; box-sizing: border-box;}
// body{height: 900px;}
// header {
// 	text-align: center;
// 	width: 100%;
// 	height: auto;
// 	background-size: cover;
// 	background-attachment: fixed;
// 	position: relative;
// 	overflow: hidden;
// 	border-radius: 0 0 85% 85% / 30%;
// }
// header .overlay{
// 	width: 100%;
// 	height: 100%;
// 	padding: 50px;
// 	color: #FFF;
// 	text-shadow: 1px 1px 1px #333;
//   background-image: linear-gradient( 135deg, #9f05ff69 10%, #fd5e086b 100%);
	
// }

// h1 {
// 	font-family: 'Dancing Script', cursive;
// 	font-size: 80px;
// 	margin-bottom: 30px;
// }

// h3, p {
// 	font-family: 'Open Sans', sans-serif;
// 	margin-bottom: 30px;
// }

// button {
// 	border: none;
// 	outline: none;
// 	padding: 10px 20px;
// 	border-radius: 50px;
// 	color: #333;
// 	background: #fff;
// 	margin-bottom: 50px;
// 	box-shadow: 0 3px 20px 0 #0000003b;
// }
// button:hover{
// 	cursor: pointer;
// }

    });

 
};
