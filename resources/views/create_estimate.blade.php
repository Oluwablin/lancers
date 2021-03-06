@extends('layouts.master')

@section('styles')
    <style>
        * {
    margin-right: 0px;
    margin-left: 0px;
    font-family: Ubuntu;
}
body {
    margin-top: 0px;
}
ul {
    display: inline-block;
    float: none;   
    width: fit-content;
    padding-inline-start: 10px;
    margin-top: 24px;
    
}

li {
    
    display: inline;
}
.h1, h1 {
    font-size: 2.4rem !important;
    margin-top: 4% !important;
    color: #262626;
}
.text-center h1 {
    text-align: left !important;
    margin-left: 17.2%;
}
button {
    width: 120px;
    background: #ffffff;
    border: none;
    height: 100%;
}
#container div {
    border: 1px solid black;
}

#container p {
    justify-content: center;
    margin-top: 9px;
    font-style: normal;
    font-weight: bold;
    color: #323A43;
}
/*#container .navM {
    justify-content: center;
    font-style: normal;
    font-weight: bold;
    display: inline-flex;
    text-align: center;
    align-items: center;
    cursor: pointer;
}*/
.cEstimate { 
    margin: 0 auto;
    align-content: center;
    font-weight: bold;
    font-size: 20px;
    align-items: center;
    flex-wrap: wrap;
}
.next a {
    color: #ffffff;
}
.next {
    width: 10px;
    background: rgba(196, 196, 196, 0.4);
    float: right;
    font-size: 24px;
    font-weight: bold;
    padding-right: 98px;
    padding-left: 47px;
    color: white;
}
div > #ext{
    background: rgba(207, 204, 204, 0.4);
    font-size: 24px;
    font-weight: bold;
    justify-content: center;
    border: none;
    color: white;
    width: 100%;
    height: 50px;
}
 .a-next {
    background: rgba(207, 204, 204, 0.4);
    width: 220px;
    height: 60px;
    padding: 5px 20px;
    margin: 0 auto;
    font-size: 24px;
    font-weight: bold;
    margin-top: 60px;
    clear: both;
    border: none;
    color: white;
    border: none !important;
}

.a-next a {
    color: white;
}
p, h3 {
    width: fit-content;
}
.lists {
    width: fit-content;
}
h5 {
    font-weight: bold;
    color: #262626;
}
  .card
  {
    display: grid;
    min-height: 34vh;
    max-width: fit-content;
    position: relative;
}
.card .card-body
{
    display: inline-grid;
    max-width: fit-content;
    justify-content: baseline;
    align-items: flex-end;
}
.card-body:hover {
    border: 5px solid black;
    box-sizing: border-box;
}
.dropbtn, .project {
     margin-top: 1vh; 
    height: 50px;
    padding: 10px;
    width: 100%;
    background: #ffffff;
    border: 1px solid rgba(145, 145, 145, 0.4);
    color: #091429;
}
.project {
    border: 2px solid rgba(145, 145, 145, 0.4);
    overflow: hidden;
}
.l-proj {
    font-size: 14px;
    border: none;
    width: 100%;
    vertical-align: middle;
    -webkit-box-pack: justify;
}
.l-proj::placeholder {
    color: #919191;
}
.l-proj:focus {
    border: none;
}
.req {
     margin-left: 221px; 
     margin-top: 12rem;
    float: right;
}
.signup {
    background: #0ABAB5;
    width: 145px;
    height: 54px;
    font-weight: 500;
    font-size: 18px;
    line-height: 21px;
    color: white;
}

.est {
    color: white; 
    background:  #0ABAB5;
    font-weight: bold;
    font-size: 28px;
    line-height: 32px;
    padding: 10px;
    text-align: center;
    padding-top: 10px !important;
}
li {
    padding: 15px;
    margin: 8px !important;
    margin-top: 21px;
}
li a {
    margin: 1px;
    padding: 1px;
    color: black;
}

#new_user {
    margin-top: 20px;
    margin-left: 2%;
}
.shift {
    font-weight: bold;
    font-size: 28px;
    line-height: 32px;
}
.login {
    font-weight: 500;
    font-size: 18px;
    line-height: 21px;
}
.hidden {
    display: none;
}
.disabled {
    cursor: not-allowed;
}
.box {
    margin-top: 4%;
}

#container {
    display: grid;
    grid-template-columns: 1fr 8fr 2fr;
}
option, select{
    font-size: 14px;
}
.dropbtn:focus, .project:focus, .dropbtn:hover, .project:hover {
    cursor: pointer !important;
}
#clear{
    padding: auto;
}
 /*#ext {
    justify-content: center;
    border: none;
    color: white;
    border: none !important;
}*/
.row {
    margin-right: 0;
    margin-left: -15px;
}



@media (max-width: 992px) 
{
.h1, h1 {
    font-size: 2rem !important;
    margin-top: 3% !important;
}
.text-center h1 {
    margin-left: 17.2%;
}
button {
    width: 120px;
    height: 100%;
}
#container p {
    font-size: 19.5px;
    margin-top: 9px;
}
div > #ext{
    font-size: 20px;
}
.a-next {
    width: 180px;
    height: 60px;
    padding: 5px 20px;
    font-size: 20px;
    margin-top: 60px;
}
.h5, h5 {
    font-size: 1.05rem;
}
p.card-text {
    font-size: .8rem;
}
  .card
  {
    min-height: 34vh;
}
.card-body:hover {
    border: 3px solid black;
}
.dropbtn, .project {
     margin-top: 1vh; 
    height: 40px;
    padding: 10px;
    width: 100%;
}
.project {
    border: 1.5px solid rgba(145, 145, 145, 0.4);
    overflow: hidden;
}
.l-proj {
    font-size: 14px;
    width: 100%;
    margin-bottom: 2rem;
}
.l-proj::placeholder {
    line-height: 10px;
}
.box {
    margin-top: 3%;
}
option, select{
    font-size: 14px;
}
#container .navM img {
    height: 20px;
}

}



@media (max-width: 767px) 
{
.h1, h1 {
    font-size: 1.5rem !important;
    margin-top: 3% !important;
}
.text-center h1 {
    margin-left: 17.2%;
}
#container p {
    margin-top: 5px;
}
.a-next {
    width: 160px;
    height: 55px;
    padding: 5px 15px;
    font-size: 18px;
    margin-top: 60px;
    margin-bottom: 100px;
}
  .card
  {
    min-height: 28vh;
    margin-bottom: 30px;
    max-width: 85%;
    margin-left: 7%;
}
.card-body:hover {
    border: 2px solid black;
}
.dropbtn, .project {
     margin-top: 1vh; 
    height: 40px;
    padding: 0;
    width: 72vw !important;
}
.project {
    border: 1.5px solid rgba(145, 145, 145, 0.4);
    overflow: hidden;
}
.l-proj {
    font-size: 14px;
    width: 100%;
    margin: .5rem 0 0 .3rem;
}
.l-proj::placeholder {
    line-height: 10px;
}
.box {
    margin-top: 3%;
}
option, select{
    font-size: 14px;
}
#container .navM img {
    height: 20px;
}
#container p {
    font-size: 17.5px;
    margin-top: 12px;
}
div > #ext {
    font-size: 18px;
}
#container .navM img {
    height: 18px;
}

}


@media (max-width: 576px) 
{
.h1, h1 {
    font-size: 1.15rem !important;
}
#container p {
    margin-top: 0x;
}
.a-next {
    width: 120px;
    height: 45px;
    padding: 5px 10px;
    font-size: 15px;
    margin-top: 25px;
    margin-bottom: 110px;
}
.h5, h5 {
    font-size: 1rem;
}
  .card
  {
    min-height: 25vh;
}
p.card-text {
    font-size: .78rem;
    padding-right: .5rem;
}
.card-body:hover {
    border: 1px solid black;
}
.dropbtn, .project {
     margin-top: 0; 
    height: 35px;
    padding: 0;
    width: 70vw !important;
}
.project {
    border: .5px solid rgba(145, 145, 145, 0.4);
}
.l-proj {
    font-size: 12px;
}
.box {
    margin-top: 2%;
}
option, select{
    font-size: 12px;
}
#container .navM img {
    height: 20px;
}
#container p {
    font-size: 16px;
    margin-top: 12px;
}
div > #ext {
    font-size: 15px;
}
#container .navM img {
    height: 14px;
}
button {
    width: 70px;
}

}
    </style>
@endsection

@section('header')
<div id="container">
        <div>
            <button class="close navM"  id="close"><a href="index.html"><img id="clear" src="https://res.cloudinary.com/celx/image/upload/v1570718446/vhmdnd4sf3f5w3burj4m.svg" alt=""></a></button>
        </div>
        <div>
            <p class="nav cEstimate" id="cre">Create Estimate</p>
        </div>
        <div>
           <input class="next disabled" id="ext" type="button" value="NEXT">
        </div>
      </div>    
@endsection

@section('content')
<div class="container-fluid">
        <div class="row text-center">
          <div class="col-12">
            <h1>What project are you estimating?</h1>
          </div>
        </div>
        </div>
      
        <div class="row ml-auto box justify-content-center">
          <div class="col-md-4">
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title">A previously created project</h5>
                      <p class="card-text">Find estimate for a previously created project, by doing so the estimate gets populated with some of the data.</p>
      
                      <div class="dropdown mr-1">
                         <select class="dropbtn" name="" onmouseout="verifyPath()" id="projectSelect">
                             <option value="select" selected="disabled">Select Project</option>
                             <a href=""><option value="app" class="dropdown-item">Lancers</option></a>
                             <a href=""><option value="branding" class="dropdown-item">AB Technology Solutions Branding</option></a>
                         </select>  
                         <i class="fa fa-caret-down"></i>                           
                     </div>
                 </div>
             </div>
         </div>
        
          <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">A new project</h5>
                    <p class="card-text">Create a new estimate and set up a new project based on the
                        information.
                    </p>
                  
                   <div class="project">
                       <input class="l-proj" type="text" onmouseout="verifyPath()" placeholder= "Project Name" name="" id="createProject">
                       <br>
                       <span class="req">Required</span>
                   </div>
                </div>
             </div>
           </div>
      
       </div>
      
      <div class="container-fluid">
      <div class="row text-center">
        <div class="col-12">
          <button class="a-next disabled"><a href="#">NEXT</a></button>
        </div>
      </div>
      </div>      
@endsection

@section('script')
    
<script>
        let est_content = document.querySelector('#est_content');
        let estimate_page = document.querySelector('#Create_estimate');
    
        let hide = () => {
           // estimate_page.classList.add('hidden');
           document.querySelector('#Create_estimate').classList.remove('hidden');
           document.querySelector('#estimate').classList.add('hidden');
           
        }
    
        est_content.addEventListener('click', hide );
    
    
        document.querySelector('#close').addEventListener('click', () => {
            document.querySelector('#estimate').classList.remove('hidden');
            document.querySelector('#Create_estimate').classList.add('hidden');
    
        });
    
            //createProject = '';
        
        
        
    
        function verifyPath(){
            let createProject = document.getElementById('createProject').value;
            let projectSelect = document.getElementById('projectSelect');
    
            let ele = projectSelect.selectedIndex;
    
            if ( createProject !== "" || ele !== 0 ){
                document.querySelector('.a-next').style.background = '#0ABAB5';
                document.querySelector('.next').style.background = '#0ABAB5';
                
                document.querySelector('.a-next').classList.remove('disabled');
                document.querySelector('.next').classList.remove('disabled');
            } else {
                //console.log('here works');
                document.querySelector('.next').style.background = 'rgba(207, 204, 204, 0.4)';
                document.querySelector('.next').classList.add('disabled');
                document.querySelector('.a-next').style.background = 'rgba(207, 204, 204, 0.4)';
                document.querySelector('.a-next').classList.add('disabled');
            }
            
        }
        </script>
@endsection