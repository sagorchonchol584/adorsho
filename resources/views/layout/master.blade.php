<html>
	<head>
		<link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('frontend/css/sidebar.css') }}" rel="stylesheet">
		<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
		<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"> </script>	
		<script src="{{ asset('frontend/js/sweetalert.min.js') }}"> </script>	
	    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
		<link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
		<meta name="csrf-token" content="{{ csrf_token() }}">
	</head>
	

<style>
	
	
	
	

	/* collaspe icon */

	.btn-toggle::before {
		width: 1.25em;
		line-height: 0;
		content: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='rgba%280,0,0,.5%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 14l6-6-6-6'/%3e%3c/svg%3e");
		transition: transform .35s ease;
		transform-origin: .5em 50%;
	}

	.b-example-divider {
		flex-shrink: 0;
		width: 1.5rem;
		height: 100vh;
		background-color: rgba(0, 0, 0, .1);
		border: solid rgba(0, 0, 0, .15);
		border-width: 1px 0;
		box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
	}


	/* collaspe animation */
	.btn-toggle[aria-expanded="true"]::before {
		transform: rotate(90deg);
	}
	.btn-toggle {
		display: inline-flex;
		align-items: center;
		padding: .25rem .5rem;
		font-weight: 600;
		color: rgba(0, 0, 0, .65);
		background-color: transparent;
		border: 0;
	}



	/* collaspe list */
	.btn-toggle-nav a {
		display: inline-flex;
		padding: .1875rem .5rem;
		margin-top: .125rem;
		margin-left: 1.25rem;
		text-decoration: none;
	}

	.link_line{
		background-color: #e0f3ff;
		height: auto;
		width: 3px;
		margin-left: 40px;
	}
		
	:root{
		--header-height: 60px;
		--nav-width: 78px;
		--first-color-light: #AFA5D9;
		--white-color: #F7F6FB;
		--body-font: 'Nunito', sans-serif;
		--normal-font-size: 1rem;
		--z-fixed: 100;
	}*, ::before, ::after{
		box-sizing: border-box;
	}
	

	body{
		position: relative;
		transition: .5s;
		background: white;
		padding-left: 100px;
	    margin: var(--header-height) 0 0 0;
	}

	a{
		text-decoration: none
	}


	.header{
		width: 100%;
		position: fixed;
		top: 0;
		left: 0;
		display: flex;
		background-color: #FAFBFC;
		z-index: 1;
		transition: .5s;
		height: 60px;
		box-shadow: 0 0.46875rem 2.1875rem rgba(4,9,20,.03),
		0 0.9375rem 1.40625rem rgba(4,9,20,.03),
		0 0.25rem 0.53125rem rgba(4,9,20,.05),
		0 0.125rem 0.1875rem rgba(4,9,20,.03);
	}


	.header_toggle{
		color: #000000;
		font-size: 1.5rem;
		cursor: pointer;
		
	}


	.header_img{
		width: 35px;
		height: 35px;
		display: flex;
		justify-content: center;
		border-radius: 50%;
		overflow: hidden
	}


	.header_img img{
		width: 40px
	}



	.l-navbar{
		position: fixed;
		left: 0;
		width:70px;
		height: 100vh;
		background-color: #fff;
		padding: .5rem 1rem 0 0;
		z-index: 0;
		transition: all .2s;
		box-shadow: 7px 0 60px rgba(0,0,0,.05);
	
	}


	.nav{
		height: 100%;
		display: flex;
		flex-direction: column;
		justify-content: space-between;
		overflow: hidden;
			
	}

	.nav_logo, .nav_link{
		display: grid;
		grid-template-columns: max-content max-content;
		align-items: center;
		column-gap: 1rem;
		padding: .5rem 0 .5rem 1.5rem
	}


	.nav_logo{
		margin-bottom: 2rem;
		
	}


	.nav_logo-icon{
		font-size: 1.25rem;
		color: var(--white-color)
	}


	.nav_logo-name{
		color: var(--white-color);
		font-weight: 700
	}


	.nav_link{
		position: relative;
		color: var(--first-color-light);
		margin-bottom: 1.5rem;
		transition: .3s
	}

	.nav_link:hover{
		color: var(--white-color)
	}

	.nav_icon{
		font-size: 1.25rem
	}

	.shows{
		left: 0;
		width: 280px;
	
	}

	.body-pd{
		padding-left: 280px;
		transition: .5s;
		
	}

	.height-100{
		height: 100%;
	}
	
	.nav-bar-mother{
		height: 100vh;
		width: 280px;
		
	}
	
	.url-size{
		font-size: 14px;
		padding-left: 20px;
		padding-top: 5px;
	}
	
	
	.head-dec{
		height: 40px;
		padding-left:10px;
		padding-right: 10px;
		
	}
	
	.head-main{
		padding-left: 15px;
		padding-top: 8px;
		height: 40px;
	}
	
	.head-main:hover{
		
		background: #e0f3ff;
		border-radius: 5px;
	}
	
	.desh-boad{
		font-weight: bold;
	}
	
	.menu-width{
		width: 150px;
	}
		
 .kek{
		
		list-style-type: none;
		width: 150px;
		
	}
	
	.text{
		padding: 15px;
		width: 150px;
	}

#Account {
  -moz-transition: height .5s;
  -ms-transition: height .5s;
  -o-transition: height .5s;
  -webkit-transition: height .5s;
   transition: height .5s;
   height: 0;
   overflow: hidden;
   }
   
   
   #Page {
  -moz-transition: height .5s;
  -ms-transition: height .5s;
  -o-transition: height .5s;
  -webkit-transition: height .5s;
   transition: height .5s;
   height: 0;
   overflow: hidden;
   } 
   
   #Deshboard {
  -moz-transition: height .5s;
  -ms-transition: height .5s;
  -o-transition: height .5s;
  -webkit-transition: height .5s;
   transition: height .5s;
   height: 0;
   overflow: hidden;
   }
	
   #managemntcss {
  -moz-transition: height .5s;
  -ms-transition: height .5s;
  -o-transition: height .5s;
  -webkit-transition: height .5s;
   transition: height .5s;
   height: 0;
   overflow: hidden;
   }
   

	.two{
		width: 100%;
		height: 100%;
		transition: .5s;
	}	
	

	
	.ami{
		width:10%;
		height:10%;
		padding-top: 10px;
		padding-left: 50px;
		position: absolute;
		left: 0px;
	   animation-name: example;
       animation-duration: 4s;
	}
	
	.vigi{
		
		 visibility: hidden;
		   
	}
	
@keyframes example {
 25%  {background-color:write; left:50px; top:0px;}
  0%   {background-color:write; left:0px; top:0px;}
}


.ones{
	 width: 80%;
	height: 60px;
	float: left;
}
.onetoess{
	 width: 310px;
	height: 60px;
	float: right;
 text-align: right;
}

</style>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

	<symbol id="bootstrap" viewBox="0 0 118 94">
		<title>Bootstrap</title>
		<path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
	</symbol>
	
	<symbol id="home" viewBox="0 0 16 16">
		<path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
	</symbol>
	
	<symbol id="speedometer2" viewBox="0 0 16 16">
		<path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
		<path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
	</symbol>
	
	<symbol id="table" viewBox="0 0 16 16">
		<path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
	</symbol>
	
	<symbol id="people-circle" viewBox="0 0 16 16">
		<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
		<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
	</symbol>
	
	<symbol id="grid" viewBox="0 0 16 16">
		<path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
	</symbol>
	
	<symbol id="collection" viewBox="0 0 16 16">
		<path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z"/>
	</symbol>
	
	<symbol id="calendar3" viewBox="0 0 16 16">
		<path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
		<path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
	</symbol>
	
	<symbol id="chat-quote-fill" viewBox="0 0 16 16">
		<path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"/>
	</symbol>
	
	<symbol id="cpu-fill" viewBox="0 0 16 16">
		<path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
		<path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z"/>
	</symbol>
	<symbol id="gear-fill" viewBox="0 0 16 16">
		<path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
	</symbol>
	<symbol id="speedometer" viewBox="0 0 16 16">
		<path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
		<path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
	</symbol>
	<symbol id="toggles2" viewBox="0 0 16 16">
		<path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z"/>
		<path d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z"/>
		<path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z"/>
	</symbol>
	<symbol id="tools" viewBox="0 0 16 16">
		<path d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
	</symbol>
	<symbol id="chevron-right" viewBox="0 0 16 16">
		<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
	</symbol>

	<symbol id="taka" viewBox="0 50 500 450">
    <path fill-rule="evenodd" d="M0 0 C16.18616656 16.18616656 21.83860188 40.9696073 21.87442017 63.21591187 C21.86902725 64.56998642 21.86902725 64.56998642 21.86352539 65.95141602 C21.86367142 66.92808731 21.86381744 67.90475861 21.8639679 68.911026 C21.86327653 72.1086761 21.85552075 75.30626645 21.84765625 78.50390625 C21.84578931 80.73306751 21.84436671 82.96222918 21.84336853 85.19139099 C21.83956508 91.03566639 21.82975348 96.87991662 21.81866455 102.72418213 C21.80840359 108.69697733 21.8038609 114.66977663 21.79882812 120.64257812 C21.78812914 132.34506309 21.77107899 144.04752945 21.75 155.75 C22.44084403 155.72627068 23.13168806 155.70254135 23.84346676 155.67809296 C27.00148969 155.58336661 30.15921292 155.52479338 33.31811523 155.46679688 C34.40490318 155.42882996 35.49169113 155.39086304 36.61141205 155.35174561 C43.51390492 155.25670493 47.35837429 155.75526438 52.66015625 160.28125 C54.44370413 162.21180073 56.16315059 164.2036091 57.8125 166.25 C58.69769646 167.24761528 59.58900079 168.23984437 60.48632812 169.2265625 C62.97437232 172.01793594 65.3686197 174.86757833 67.75 177.75 C72.35230999 183.13205203 77.10799392 188.20157578 82.18164062 193.14257812 C83.38761563 194.32848143 84.57119358 195.53708707 85.75 196.75 C85.75 197.08 85.75 197.41 85.75 197.75 C64.63 197.75 43.51 197.75 21.75 197.75 C21.81659613 220.24204461 21.81659613 220.24204461 21.9218235 242.73381615 C21.96609036 250.77973875 22.00454224 258.8255493 22.02099609 266.87158203 C22.03404537 273.24354223 22.06109289 279.61526697 22.10461307 285.98709452 C22.12715491 289.35773114 22.14291511 292.72807817 22.14188385 296.09879684 C22.14425705 299.87139685 22.17136829 303.64308509 22.20410156 307.41552734 C22.1990712 308.52036469 22.19404083 309.62520203 22.18885803 310.76351929 C22.32959836 321.28680016 25.5271246 329.99333243 32.75 337.75 C42.51257579 346.85210554 54.52512128 348.27038584 67.45703125 348.0234375 C93.40990169 346.84402696 116.29379208 327.50091277 133.16064453 309.22119141 C135.84574967 306.17779927 138.32539298 303.00264255 140.75 299.75 C141.34941406 298.96625 141.94882812 298.1825 142.56640625 297.375 C153.78715481 282.11277376 160.36600865 265.53727514 162.75 246.75 C161.76257813 246.91886719 160.77515625 247.08773438 159.7578125 247.26171875 C145.26861575 249.31029177 128.72159786 246.3483852 116.75 237.75 C106.87369613 229.7368386 100.68761641 218.66855001 98.96533203 206.01123047 C98.47969448 200.91148559 98.37822232 195.8073411 98.3125 190.6875 C98.27890381 189.05530518 98.27890381 189.05530518 98.24462891 187.39013672 C98.28495208 173.31734964 103.72397942 159.77602058 113.75 149.75 C127.94289753 139.21319287 145.13868158 135.85877219 162.6015625 138.28515625 C170.07868654 139.49823057 177.07874022 141.03675163 183.75 144.75 C184.55695313 145.18183594 185.36390625 145.61367187 186.1953125 146.05859375 C206.58402043 157.56231428 219.67359419 178.862977 226.22900391 200.90600586 C235.89866834 235.75160523 227.61043264 272.59963847 210.75 303.75 C193.85716194 333.49336191 170.13173098 358.0708328 139.75 373.75 C138.57872559 374.35908203 138.57872559 374.35908203 137.38378906 374.98046875 C101.77390966 393.28527034 61.68604584 403.31798083 22.31640625 392.00390625 C3.64810745 385.44035322 -8.7477604 373.10823886 -17.70703125 355.828125 C-22.07023995 345.47838266 -22.6854679 334.38350524 -22.59057617 323.30908203 C-22.58972713 321.92772439 -22.59021043 320.54636541 -22.59190369 319.16500854 C-22.59275428 315.46335351 -22.57528298 311.76199814 -22.55418181 308.06041193 C-22.53525633 304.17406952 -22.53365221 300.28771805 -22.53010559 296.40133667 C-22.52083125 289.0635492 -22.49628088 281.72589797 -22.46605712 274.38817012 C-22.43236834 266.02526693 -22.41599094 257.66235678 -22.40097082 249.29940248 C-22.36972644 232.11618989 -22.31705707 214.93310941 -22.25 197.75 C-23.43113373 197.79713135 -24.61226746 197.8442627 -25.82919312 197.89282227 C-30.26166041 198.05719733 -34.69386615 198.15956262 -39.12850952 198.24438477 C-41.03811106 198.28931609 -42.94740882 198.3504882 -44.85592651 198.42895508 C-56.09949135 198.87924214 -64.05032707 199.11645331 -72.68994141 191.19335938 C-75.55077039 187.99434525 -78.15490391 184.70506465 -80.57885742 181.16455078 C-85.48859684 174.07071252 -91.78397683 168.11935968 -97.97070312 162.15625 C-99.43281122 160.72301047 -100.84617692 159.24037458 -102.25 157.75 C-102.25 157.09 -102.25 156.43 -102.25 155.75 C-75.85 155.75 -49.45 155.75 -22.25 155.75 C-22.28270341 140.7087618 -22.28270341 140.7087618 -22.36132812 125.66796875 C-22.40360173 119.52778583 -22.44065026 113.38789991 -22.44555664 107.24755859 C-22.44985458 102.29355581 -22.47844109 97.34021944 -22.52343178 92.38642502 C-22.53635907 90.5023729 -22.54073148 88.61824084 -22.53615379 86.73414993 C-22.40823408 70.9853691 -22.40823408 70.9853691 -30.16398621 57.66567993 C-37.28051321 50.72487037 -46.18402376 47.42584463 -56.05859375 47.51953125 C-59.99404628 47.9334202 -63.5727584 49.35018219 -67.25 50.75 C-68.24 51.08 -69.23 51.41 -70.25 51.75 C-72.02761591 48.2534056 -73.79583581 44.75213884 -75.5625 41.25 C-76.06201172 40.26773438 -76.56152344 39.28546875 -77.07617188 38.2734375 C-84.19840647 24.12330255 -84.19840647 24.12330255 -84.3125 18.875 C-82.67494734 14.05866864 -80.03643986 9.98310813 -77.25 5.75 C-76.38375 4.4196875 -76.38375 4.4196875 -75.5 3.0625 C-55.7273221 -17.25941896 -21.92583735 -15.17942586 0 0 Z " fill="#000000" transform="translate(192.25,63.25)"/>	
	</symbol>
	
</svg>


<header class="header body-pd " id="header">

<div class="ami" id="icons" ><h5>{{auth()->user()->Shopname}}</h5></div>
		<div class="header_toggle">
		
		<div class="hh h-25">
			<i id="header-toggle" class="fas fa-bars text-black-50 p-4"></i> 
		</div>
			
		</div>
		<div class="two">
		
  <div class="ones">
  	
  	<h1>{{auth()->user()->Shopname}}</h1>
  	
  	
  	
  </div>
  
  	<div class="onetoess border">
  	
  	
  		<nav class="navbar">
        <div class="container-fluid"> 
                <ul class="nav navbar-nav ms-auto">        	
                    <li class="nav-item dropdown">       
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
							<span style="font-weight: bold;">{{auth()->user()->Name}} </span> 
							<img src="{{asset('images')}}/{{auth()->user()->image}}" width="40px" height="40px" class="rounded-circle"/>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Reports</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <div class="dropdown-divider"></div>
                            <a href="{{route('loginout')}}" class="dropdown-item">Logout</a>
                        </div>
                    </li>
                </ul>
        </div>
      </nav> 
  	
 		 </div>
  
		</div>
	</header>


<body id="body-pd" class="body-pd">
	<div class="l-navbar shows" id="nav-bar">
		<nav class="nav">
			<div>
			
			<div class="" style="width: 250px;">
				<ul class="list-unstyled ps-0">
					<li class="mb-1">					
					<p  id="menu" class="text-primary fw-bold url-size">MENU</p>
			<div class="head-dec">
			
				<div id="test" class=" head-main align-items-center"  onclick="Deshbord()">
				<svg class="bi me-2" width="20" height="20"> <use xlink:href="#home"/></svg>
				<span  id="deshbdsd" class="desh"> Deshboard</span>
					<i class='bx bx-chevron-down bx-sm float-right '></i>
		          </div>
			   </div>
				

			 	<div id="Deshboard">
			 	  <div class="deshbo">
					<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small link_line Deshboard">
						<li><a href="{{ route('overview')}}" class="link-dark rounded menu-width"> Overview</a></li>
						<li> <a href="{{ route('cashflowfun')}}" class="link-dark rounded menu-width "> Cash Flow</a></li>   
						<li><a href="{{ route('reports')}}" class="link-dark rounded menu-width">Reports</a></li>
						
						
					</ul>
					</div>
				</div>
				
				  </li>
				
				
				
			 <li class="mb-1">				
			<div class="head-dec">
            <div class=" head-main align-items-center" onclick="Pages('hello')" id="pages">
						<svg class="bi me-2" width="20" height="20"> <use xlink:href="#speedometer2"/></svg><span  id="pagec" class="desh"> Sales & Stock</span>
						<i class='bx bx-chevron-down bx-sm float-right' id="rote"></i>
					</div>
				</div>


				<div id="Page">
				<div class="pagess">
					<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small link_line fff">	
					<li><a href="{{ route('sales')}}" class="link-dark rounded menu-width">Sales</a></li>
					<li><a href="{{ route('stock')}}" class="link-dark rounded menu-width">Stock Add</a></li>
						<li><a href="{{ route('product_info')}}" class="link-dark rounded menu-width">Product Info</a></li>	
						<li><a href="{{ route('oder')}}" class="link-dark rounded menu-width">oder</a></li>			
					
						<li><a href="{{ route('stockadd')}}" class="link-dark rounded menu-width"> just use perpose</a></li>
					</ul>
				 </div>
				</div>
						
				<!--  mangemnt -->
	
				<li class="mb-1">				
			<div class="head-dec">
            <div class=" head-main align-items-center" onclick="mangemantfunt()" id="manage">
						<svg class="bi me-2" width="20" height="20"> <use xlink:href="#speedometer2"/></svg><span  id="mangepage" class="desh"> Management</span>
						<i class='bx bx-chevron-down bx-sm float-right' id="rote"></i>
					</div>
				</div>


				<div id="managemntcss">
				<div class="pagessd">
					<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small link_line fff">	
					<li><a href="{{ route('categorycheck')}}" class="link-dark rounded menu-width">Category</a></li>
					<li><a href="{{ route('stock')}}" class="link-dark rounded menu-width">Stock Add</a></li>
						<li><a href="{{ route('product_info')}}" class="link-dark rounded menu-width">Product Info</a></li>	
					</ul>
				 </div>
				</div>
						



					</li>				
					<li class="mb-1">
						<li class="border-top my-3">
							<p id="menu" class="text-primary fw-bold url-size">PROFILE</p>		
					</li>

					<div class="head-dec">
                         <div class="head-main align-items-center"  id="ac" onclick="Acountd()">
							<svg class="bi me-2" width="20" height="20"> <use xlink:href="#home"/></svg>
							<span  id="acc" class="desh"> Account</span>
							<i class='bx bx-chevron-down bx-sm float-right '></i>
						</div>
					</div>			
						<div id="Account">		
						<div class="Acountss">		
							<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small link_line">
								@if(auth()->user()->AdminCat =='Admin')	
								<li> <a href="{{ route('createnewprofile')}}" class="link-dark rounded menu-width "> New Employee</a></li>     
		                   		 @endif
								<li><a href="{{ route('customer')}}" class="link-dark rounded menu-width">Customer Add</a></li>	
								<li> <a href="{{ route('product_supplier_page')}}" class="link-dark rounded menu-width "> Suplier Pages</a></li>  
								<li><a href="{{route('profileView')}}" class="link-dark rounded menu-width">Profile</a></li>
								<li><a href="#" class="link-dark rounded menu-width">Settings</a></li>
								<li><a href="{{route('loginout')}}" class="link-dark rounded menu-width">Sign out</a></li>
							</ul>
							</div>
						</div>	
						
					</li>
				</ul>
			</div>
			
			

			
			</div>
		
		</nav>

		
	</div>


	<!--Container Main start-->
	<div class="height-100 bg-light">		
		<section class="bg-gray">
			<div class="container-fluid">
				<div class="row">
			
			
			
			
			
					@yield('content')

				</div>
			</div>
			</div>		
	 </section>	
	</div>
	
	<!--Container Main end-->


<style>
.maindailoboax-master {
  height: 530px;
  width: 600px;
  margin: auto;
  border: 1px solid #555500ff;
  text-align: center;
  border-radius: 9px;
  background: white;
  position: relative;
  top:20%;
  text-align: center;
  border-radius: 5px;
  animation: fadeIn 0.5s ease-in-out forwards;
 
}

.black_overlaya-master {
  display: none;
  position: absolute;
  top: 0%;
  left: 0%;
  width: 100%;
  height: 100%;
  background-color: black;
  z-index: 1001;
  -moz-opacity: 0.8;
  opacity: .70;
  filter: alpha(opacity=80);
 
}

.white_contenta-master {
 display: none;
 position: absolute;
 top:0;
 left:0;
 width: 100%;
 height: 100%;
 background-color:hsla(0,0%,0%,0.0);
 z-index: 1002;
}

.ddd-master{
	width: 30px;
	height: 30px;
	background-color: red;
	border: none;
}

.exitdd-master{
	height: 50px;
	width: 100%;
	background-color:#F5F5F5;
    text-align: right;
	   
	}
.mainedd-master{
		height: 10px;
		width: 100%;
		border-top: 1px solid #a6a6a6ff;
		background-color: #FFFFFF;
	}
.butttons-master{
		height: 40px;
		width: 100%;
		text-align: right;
		padding-top: 5px;
	}


.info-master{
		height: 90px;
		width: 100%;
	}

  .tkinfo-master{
		height: 40px;
		width: 100%;
		padding: 5px 10px 10px 0px;
    text-align: right;
	}

	
.inputtsupper-master{
width: 50%;
height: 60px;
float: left;
}

.inputtsuppertwo-master{
  width: 50%;
height: 60px;
float: right;

}

.my-custom-scrollbar-master {
position: relative;
height: 250px;
overflow: auto;
}
.table-wrapper-scroll-y-master {
display: block;
}

</style>

<div id="fadeaallmaster" class="black_overlaya-master"></div>
<div id="lightaallmaster" class="white_contenta-master"> 

<div class="maindailoboax-master" id="maindailoboaxallmaster">
  <div class="exitdd-master">
    
    <button class="ddd-master" onclick="pop_custom_offmaster()"><span style="color: white" >X</span></button>
   
  </div> 


<div class="mainedd-master">
<div class="col-12 h-80 fw-bold p-1" ><span style="font-size: 20px;" >Today is Expends Our shop</span></div>

<div class="col-12 h-60">

<div class="table-wrapper-scroll-y-master my-custom-scrollbar-master">
      <table class="table table-striped table-bordered" id="section1" >
       <thead>
        <tr>
         
         <th>Name</th>
         <th>Days</th>
		 <th>Balance</th>
        </tr>
       </thead>
       <tbody class="sssss">

       </tbody>
      </table>
</div>

<div class="info-master">
  <div class="tkinfo-master">
	<h4 id="infomag-master"></h4>
  </div>
  <div class="inputtsupper-master">
  </div> 
  <div class="inputtsuppertwo-master">
  </div>
</div>
<div class="butttons-master">
	<button id="cashbtm" type="button" onclick="all_data_chack()" class="btn btn-primary">Sent</button>&nbsp;
</div>
</div>
</div>

@if(auth()->user()->Notifi_meg =='1')	
<script>

fetch_customer_data();
function fetch_customer_data()
 {
  $.ajax({
  method:'GET',
   url:"{{ route('cashflowstatesroute') }}",
   dataType:'json',
   success:function(data)
   {
    $('.sssss').html(data.cash_sent_any_person_show); 

//	console.log(data.cash_sent_any_person_show)
   // all_cash_sent_fuc(data.totalsates, data.today_suppier_exps, data.today_expence_tk, data.cash_crdits);
   // total_sales=data.totalsates;
   }
  })
}


function all_data_chack(){
	pop_custom_offmaster();
	conformdeleta();
}

   pop_custom_onmaster();
function pop_custom_onmaster(){
		document.getElementById('fadeaallmaster').style.display='block';
		document.getElementById('lightaallmaster').style.display='block';
		document.getElementById('maindailoboaxallmaster').style.display='block';
		document.body.style.overflow ="hidden";
}


function conformdeleta(){
    swal({
   title: "Are you sure?",
   text: "you will not be able to return!",
   icon: "warning",
   buttons: true,
   dangerMode: true,
 })
 .then((willDelete) => {
   if (willDelete) {
     swal("Data has Deleted ", {
       icon: "success",
     }).then(function(){
		
		datachack();
     });
 
   } else {
     swal("Do you want Exit ?",{
       closeOnClickOutside: false,
     }).then((mee)=>{
       //---------this pop alert---------
     });
   }
 });
}

function datachack(){
  $.ajax({
     type: 'GET', //THIS NEEDS TO BE GET
     url: '/data_chack_to_sender_data/',
     success: function (data) {
	//var datajos=JSON.parse(data);
	location.reload();
     console.log(data);
     fetch_customer_data();
       
     },
     error: function() { 

     }
    });
}


</script>	
				       
 @endif

	<!--Container Main end-->

		
</body>
</div>




<script>


function pop_custom_offmaster(){
		document.getElementById('fadeaallmaster').style.display='none';
		document.getElementById('lightaallmaster').style.display='none';
		document.getElementById('maindailoboaxallmaster').style.display='none';
}






auto_loaddes();

        let darkModeAc = localStorage.getItem("collapsac"); 
        let pagrAc = localStorage.getItem("collapsac_page"); 
        let deshboardAc = localStorage.getItem("collapsac_deshboard");
		let mangagementmemorize = localStorage.getItem("managementkey");
        
        
	     var growDivAC = document.getElementById('Account');
         var pagese = document.getElementById('Page');
         var edeshboard = document.getElementById('Deshboard');
         var Managementddd = document.getElementById('managemntcss');
         
         
        var text_change = document.getElementById("acc");
        var text_change_page = document.getElementById("pagec"); 
        var text_change_deshboard = document.getElementById("deshbdsd");
		var text_change_mangepage = document.getElementById("mangepage");
        
        

function enableDarkModeac(){
 var wrapper = document.querySelector('.Acountss');
	  growDivAC.style.height =  wrapper.clientHeight+"px";
      localStorage.setItem("collapsac", "Account");   
}


function disableDarkModeac(){
    growDivAC.style.height = 0;   
    localStorage.setItem("collapsac", "disabled");   
}



function enablepage(){	
  var wrapper = document.querySelector('.fff');
	  pagese.style.height = wrapper.clientHeight+"px";
      localStorage.setItem("collapsac_page", "Page");      
}

function disablepage(){	
    pagese.style.height = 0;   
    localStorage.setItem("collapsac_page", "disabled");    
}




function enableDeshboard(){	
      var wrapper = document.querySelector('.deshbo');
	  edeshboard.style.height =  wrapper.clientHeight+"px";
      localStorage.setItem("collapsac_deshboard", "Deshboard");      
}

function disableDeshboard(){	
    edeshboard.style.height = 0;   
    localStorage.setItem("collapsac_deshboard", "disabled");    
}



function enableManagemnt(){	
      var wrapper = document.querySelector('.deshbo');
	  Managementddd.style.height =  wrapper.clientHeight+"px";
      localStorage.setItem("managementkey", "Management");      
}

function disableManagement(){	
    Managementddd.style.height = 0;   
    localStorage.setItem("managementkey", "disabled");    
}





//---------------------------------------------------------------------

if (darkModeAc === "Account") {
	enableDarkModeac();
	text_change.style.fontWeight = "bold";
	
}

if (pagrAc === "Page") {
	enablepage();
	text_change_page.style.fontWeight = "bold";
}


if (deshboardAc === "Deshboard") {
	enableDeshboard();
	text_change_deshboard.style.fontWeight = "bold";
}


if (mangagementmemorize === "Management") {
	enableManagemnt();
	text_change_mangepage.style.fontWeight = "bold";
}



function Deshbord(){	
	deshboardAc = localStorage.getItem("collapsac_deshboard"); 
	
	   if (deshboardAc === "disabled") {
           enableDeshboard();
           text_change_deshboard.style.fontWeight = "bold";
	  } else {
           disableDeshboard();
           text_change_deshboard.style.fontWeight = "normal";
	  }
}


function Pages(){	
	pagrAc = localStorage.getItem("collapsac_page"); 
	
	   if (pagrAc === "disabled") {
           enablepage();
           text_change_page.style.fontWeight = "bold";
	  } else {
           disablepage();
           text_change_page.style.fontWeight = "normal";
	  }
}


 //  localStorage.clear();
function Acountd(){	

	darkModeAc = localStorage.getItem("collapsac"); 
	   if (darkModeAc === "disabled") {
      enableDarkModeac();
      text_change.style.fontWeight = "bold";
	  } else {
         disableDarkModeac();
      text_change.style.fontWeight = "normal";
	  }
	 
}


function mangemantfunt(){

	mangagementmemorize = localStorage.getItem("managementkey"); 
	   if (mangagementmemorize === "disabled") {
		enableManagemnt()
      text_change_mangepage.style.fontWeight = "bold";
	  } else {
		 disableManagement()
		 text_change_mangepage.style.fontWeight = "normal";
	  }
console.log("bangladesh")
}


document.addEventListener("DOMContentLoaded", function(event) {

		const showNavbar = (toggleId, navId, bodyId, headerId,headerIdtow) =>{
			const toggle = document.getElementById(toggleId),
		   	nav = document.getElementById(navId),
			bodypd = document.getElementById(bodyId),
			headerpd = document.getElementById(headerId)
			headertwo = document.getElementById(headerIdtow)
			

			if (toggle && nav && bodypd && headerpd && headerpd) {
				toggle.addEventListener('click', ()=>{
					nav.classList.toggle('shows')
					toggle.classList.toggle('bx-xs')
					bodypd.classList.toggle('body-pd')
					headerpd.classList.toggle('body-pd')
					headertwo.classList.toggle('vigi')	
				   // headerpd.classList.remove('one');
				})
			}
			
			
		}

		showNavbar('header-toggle','nav-bar','body-pd','header','icons')	
		const linkColor = document.querySelectorAll('.nav_link')
		function colorLink()
		{
			if (linkColor) {
				linkColor.forEach(l=> l.classList.remove('active'))
				this.classList.add('active')
			}
		}
		linkColor.forEach(l=> l.addEventListener('click', colorLink))

	});



function auto_data_load_date(f){
	
var a = f.split('-');
var date = new Date (a[0], a[1],a[2]);
localStorage.setItem("dateload",date.getTime());   

}


function auto_loaddes(){

dateload = localStorage.getItem("dateload");
//console.log(dateload);
var q = new Date();
var m = q.getMonth()+1;
var d = q.getDate();
var y = q.getFullYear();
var Today = new Date(y,m,d);


if(dateload==Today.getTime()){
//	console.log("Today");
}else{
	auto_data_load_all_info();
	localStorage.setItem("dateload",Today.getTime());  
	//console.log("lest days");
}

}
//localStorage.clear();

function auto_data_load_all_info(){

$.ajax({
	method:'GET',
	url:' /daily_activity_load/',
	dataType: 'json',
	success:function(data){
	auto_data_load_date(data);
	},
	error:function(data){
	console.log("Data failed");
	}
});
}


</script>


<!-- @if(auth()->user()->data_auto_loaded =='0')	
<script>
	
</script>			 -->




@endif
</body>
</html>
