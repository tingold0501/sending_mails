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
        content: `<header>
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

//     addHeader("header-02", {
//         label: "Fixed Angled Header",
//         media: `<header>
// 	<h1>Fixed Angled Header</h1>
// </header>

// <main>
// 	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos dolor accusamus neque laborum atque accusantium perspiciatis, in illo itaque assumenda totam. Facilis, voluptatum ipsum excepturi similique facere unde quos necessitatibus quia culpa
// 		eligendi consequuntur vero quas eum dolorem voluptates laboriosam? Dolor neque quas minus numquam laboriosam magni voluptatem enim eveniet.</p>
// 	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos dolor accusamus neque laborum atque accusantium perspiciatis, in illo itaque assumenda totam. Facilis, voluptatum ipsum excepturi similique facere unde quos necessitatibus quia culpa
// 		eligendi consequuntur vero quas eum dolorem voluptates laboriosam? Dolor neque quas minus numquam laboriosam magni voluptatem enim eveniet.</p>
// 	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos dolor accusamus neque laborum atque accusantium perspiciatis, in illo itaque assumenda totam. Facilis, voluptatum ipsum excepturi similique facere unde quos necessitatibus quia culpa
// 		eligendi consequuntur vero quas eum dolorem voluptates laboriosam? Dolor neque quas minus numquam laboriosam magni voluptatem enim eveniet.</p>
// 	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos dolor accusamus neque laborum atque accusantium perspiciatis, in illo itaque assumenda totam. Facilis, voluptatum ipsum excepturi similique facere unde quos necessitatibus quia culpa
// 		eligendi consequuntur vero quas eum dolorem voluptates laboriosam? Dolor neque quas minus numquam laboriosam magni voluptatem enim eveniet.</p>
// 	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos dolor accusamus neque laborum atque accusantium perspiciatis, in illo itaque assumenda totam. Facilis, voluptatum ipsum excepturi similique facere unde quos necessitatibus quia culpa
// 		eligendi consequuntur vero quas eum dolorem voluptates laboriosam? Dolor neque quas minus numquam laboriosam magni voluptatem enim eveniet.</p>
// 	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos dolor accusamus neque laborum atque accusantium perspiciatis, in illo itaque assumenda totam. Facilis, voluptatum ipsum excepturi similique facere unde quos necessitatibus quia culpa
// 		eligendi consequuntur vero quas eum dolorem voluptates laboriosam? Dolor neque quas minus numquam laboriosam magni voluptatem enim eveniet.</p>
// 	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos dolor accusamus neque laborum atque accusantium perspiciatis, in illo itaque assumenda totam. Facilis, voluptatum ipsum excepturi similique facere unde quos necessitatibus quia culpa
// 		eligendi consequuntur vero quas eum dolorem voluptates laboriosam? Dolor neque quas minus numquam laboriosam magni voluptatem enim eveniet.</p>
// 	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos dolor accusamus neque laborum atque accusantium perspiciatis, in illo itaque assumenda totam. Facilis, voluptatum ipsum excepturi similique facere unde quos necessitatibus quia culpa
// 		eligendi consequuntur vero quas eum dolorem voluptates laboriosam? Dolor neque quas minus numquam laboriosam magni voluptatem enim eveniet.</p>
// </main>
// *{padding: 0; margin: 0; box-sizing: border-box;}
// header {
// 	background: url('http://www.autodatz.com/wp-content/uploads/2017/05/Old-Car-Wallpapers-Hd-36-with-Old-Car-Wallpapers-Hd.jpg');
// 	text-align: center;
// 	width: 100%;
// 	height: 100px;
// 	background-size: cover;
// 	background-attachment: fixed;
// 	position: relative;
// 	overflow: hidden;
// 	border-radius: 0 0 85% 85% / 30%;
// }
// header .overlay{
// 	width: 100%;
// 	height: 100px;
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
// </style>`,
//         content: `<header>
// 	<h1>Fixed Angled Header</h1>
// </header>

// <main>
// 	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos dolor accusamus neque laborum atque accusantium perspiciatis, in illo itaque assumenda totam. Facilis, voluptatum ipsum excepturi similique facere unde quos necessitatibus quia culpa
// 		eligendi consequuntur vero quas eum dolorem voluptates laboriosam? Dolor neque quas minus numquam laboriosam magni voluptatem enim eveniet.</p>
// 	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos dolor accusamus neque laborum atque accusantium perspiciatis, in illo itaque assumenda totam. Facilis, voluptatum ipsum excepturi similique facere unde quos necessitatibus quia culpa
// 		eligendi consequuntur vero quas eum dolorem voluptates laboriosam? Dolor neque quas minus numquam laboriosam magni voluptatem enim eveniet.</p>
// 	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos dolor accusamus neque laborum atque accusantium perspiciatis, in illo itaque assumenda totam. Facilis, voluptatum ipsum excepturi similique facere unde quos necessitatibus quia culpa
// 		eligendi consequuntur vero quas eum dolorem voluptates laboriosam? Dolor neque quas minus numquam laboriosam magni voluptatem enim eveniet.</p>
// 	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos dolor accusamus neque laborum atque accusantium perspiciatis, in illo itaque assumenda totam. Facilis, voluptatum ipsum excepturi similique facere unde quos necessitatibus quia culpa
// 		eligendi consequuntur vero quas eum dolorem voluptates laboriosam? Dolor neque quas minus numquam laboriosam magni voluptatem enim eveniet.</p>
// 	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos dolor accusamus neque laborum atque accusantium perspiciatis, in illo itaque assumenda totam. Facilis, voluptatum ipsum excepturi similique facere unde quos necessitatibus quia culpa
// 		eligendi consequuntur vero quas eum dolorem voluptates laboriosam? Dolor neque quas minus numquam laboriosam magni voluptatem enim eveniet.</p>
// 	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos dolor accusamus neque laborum atque accusantium perspiciatis, in illo itaque assumenda totam. Facilis, voluptatum ipsum excepturi similique facere unde quos necessitatibus quia culpa
// 		eligendi consequuntur vero quas eum dolorem voluptates laboriosam? Dolor neque quas minus numquam laboriosam magni voluptatem enim eveniet.</p>
// 	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos dolor accusamus neque laborum atque accusantium perspiciatis, in illo itaque assumenda totam. Facilis, voluptatum ipsum excepturi similique facere unde quos necessitatibus quia culpa
// 		eligendi consequuntur vero quas eum dolorem voluptates laboriosam? Dolor neque quas minus numquam laboriosam magni voluptatem enim eveniet.</p>
// 	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos dolor accusamus neque laborum atque accusantium perspiciatis, in illo itaque assumenda totam. Facilis, voluptatum ipsum excepturi similique facere unde quos necessitatibus quia culpa
// 		eligendi consequuntur vero quas eum dolorem voluptates laboriosam? Dolor neque quas minus numquam laboriosam magni voluptatem enim eveniet.</p>
// </main>
// <style>
// @import url(https://fonts.googleapis.com/css?family=Roboto:400,700);

// :root {
// 	/* Base font size */
// 	font-size: 10px;

// 	/* Heading height variable*/
// 	--heading-height: 30em;
// }

// body {
// 	font-family: "Roboto", Arial, sans-serif;
// 	min-height: 100vh;
// 	background-color: #101010;
// }

// header {
// 	position: fixed;
// 	width: 100%;
// 	height: var(--heading-height);
// }

// /* Create angled background with 'before' pseudo-element */
// header::before {
// 	content: "";
// 	display: block;
// 	position: absolute;
// 	left: 0;
// 	bottom: 6em;
// 	width: 100%;
// 	height: calc(var(--heading-height) + 10em);
// 	z-index: -1;
// 	transform: skewY(-3.5deg);
// 	background: 
// 		linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)),
// 		url(https://images.unsplash.com/photo-1495464101292-552d0b52fe41?auto=format&fit=crop&w=1350&q=80) no-repeat center,
// 		linear-gradient(#4e4376, #2b5876);
// 	background-size: cover;
// 	border-bottom: .2em solid #fff;
// }

// h1 {
// 	font-size: calc(2.8em + 2.6vw);
// 	font-weight: 700;
// 	letter-spacing: .01em;
// 	padding: 10rem 0 0 4.5rem;
// 	text-shadow: .022em .022em .022em #111;
// 	color: #fff;
// }

// main {
// 	padding: calc(var(--heading-height) + 1.5vw) 4em 0;
// }

// p {
// 	font-size: calc(2em + .25vw);
// 	font-weight: 400;
// 	line-height: 2;
// 	margin-bottom: 1.5em;
// 	color: #fcfcfc;
// }

// </style>
// `,
//     });
    
};
