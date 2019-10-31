@extends('layouts.app')


@section('styles')
<style>
    body {
      box-sizing: border-box;
      margin: 0px;
      font-family: ubuntu !important;
    }

    .con-div {
      background-color: #FFFFFF;
      width: 100%;
      margin: auto;
    }

    .top-divs {
      display: flex;
      margin: 0 auto;
      width: 100%;
      background-color: #FFFFFF;
      font-family: Roboto;
    }

    .ctrl-div {
      width: 8%;
      text-align: center;
      border: 1px solid #919191;
    }


    .ctrl-btn {
      width: 100%;
      background-color: #FFFFFF;
      border: none;
    }

    <div>
      <button type="submit" class="next disabled" id="btn" >NEXT</button>
    </div>
  </div>

  <h1 class="my-5 text-center">What Client is it for?</h1>

<form action="/estimate/create/step4" method="post">
    @csrf
  <div class="row ">
    <div class="col-md-6 p-0">
      <div class="row m-auto box justify-content-center">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Select Client</h5>
            <p class="card-text">Please select an already existing client on the platform</p>
            
            <select name="client" class="l-proj" style="color: #919191" oninput="verifyPath()" id="createProject" required>
              <option value="new" selected>Select Client</option>
              <option value="new">Client 1</option>
              <option value="new">Client 2</option>
              <option value="new">Client 3</option>
              <option value="new">Client 4</option>
            </select>
          </div>
      </div>
    </div>
  </div>


<div class="col-md-6 p-0">
<div class="row m-auto box justify-content-center">
<div class="card">
    <div class="card-body">
        <h5 class="card-title"   >New Client</h5>
        <p class="card-text">Please Type here for new Client
        </p>
       <div class="project"style="border: none;"  >
           <input class="l-proj" type="text" oninput="verifyPath()"  placeholder= "Project Name"  name="" id="createProject">
           <br>
           <span class="req">Required</span>
       </div>
    </div>
</div>
</div>
</div>


    .inv-div {
      width: 60%;
      text-align: center;
      border: 1px solid #919191;
    }

    #inv-btn {
      width: 100%;
      border: none;
      padding: 0.5em;
      font-weight: 500;
      font-size: 28px;
      background-color: #FFFFFF;
    }

    .send-div {
      width: 32%;
      text-align: center;
      border: 1px solid #919191;
    }

    #send-btn {
      width: 100%;
      border: none;
      padding: 0.5em;
      color: #FFF;
      font-size: 28px;
      background-color:  rgba(196, 196, 196, 0.4);
    }


    .cli-info {
      width:75%;
      height:80vh;
      background-color:#FFFFFF;
      margin: auto
    }

    .cli-box {
      display: flex;
      justify-content:space-around;
    }

    .sub-box {
      width: 30%;
      padding: 2em 1em;
      margin: 2em;
      background-color:#FFF;
      text-align:center;
      border: 1px solid #919191;
      border-radius: 2px
    }

    .sub-box:hover {
      border: 3px solid gray;
    }

    .select-project {
      width: 90%;
      padding: 1em;
      border: 1px solid #919191;
    }

    .cli-text {
      padding-top: 1.5em;
    }

    .my-icon {
      width: 100%;
      margin: 0.6em 0;
      color: #c4c4c4;
      background-color: #FFFFFF;
    }

    .what-cli {
      padding: 1.5em 1em !important;
      margin: 0;
      font-size: 42px !important;
      font-weight: bold !important;
      color: #323232;
    }

    .txt {
      margin: 2em 0;
    }
    .column-1 {
        width: 5%;
        border-right: 2px solid rgb(223, 223, 223);
        padding: 1em;
        text-align: center;
        color: black;
        text-decoration: none;
    }
    .column-2 {
        width: 75%;
        text-align: center;
        align-items: center;
        padding: 0.8em;
        color: black;
        text-decoration: none;
        font-size: 1.5em;
        font-weight: bold;
    }
    .column-3 {
        width: 15%;
        border-left: 2px solid rgb(223, 223, 223);
        padding: 0.8em;
        text-align: center;
        background-color: rgba(196, 196, 196, 0.4);
        color: white;
        text-decoration: none;
        font-size: 1.5em;
        font-weight: bold;
    }

    @media screen and (max-width: 500px) {
        .cli-box {
        display: block;
        }

        .sub-box {
        width: 90%;
        margin: 2em 0em;
        }

        option {
        width: 80%;
        }

        .what-cli {
        font-size: 1.3em;
        }
    }
    @media (max-width: 575.98px) {
        .column-1 {
            width: 15%;
            padding: 0;
        }
        .column-2 {
            width: 75%;
            padding-top: 0.6em;
            font-size: 0.9em;
        }
        .column-3 {
            width: 25%;
            padding-top: 0.7em;
            font-size: 0.8em;
        }
        img {
            height: 20px;
            width: 10px;
            padding-top: 0.6em;
        }
    }

    @media (min-width: 576px) and (max-width: 767px) {
        .column-1 {
            width: 10%;
        }
        img {
            height: 15px;
            width: 10px;
        }
    }
    @media (min-width: 768px) and (max-width: 991.98px) {
        .column-1 {
            width: 9%;
        }
    }

    .footer-next {
        width: 200px;
        margin: 0 auto;
    }

    .footer-next button {
        width: 100%;
        height: 100%;
        font-size: 1.5em;
        border: none;
        color: white;
        margin-top: 30px;
        margin-bottom: 30px;
        padding: 10px 50px;
    }
    a:hover{cursor: pointer;}
</style>
@endsection


@section('content')<div class="con-div">
<div class="max-con">
    <header style="border-bottom: 2px solid rgb(223, 223, 223);">
        <nav style="display: flex; ">
            <a href="#"  @click.prevent="$router.push('/estimate')" class="column-1">
                <img
                    src="https://res.cloudinary.com/mide358/image/upload/v1570621469/clear_24px_rasbwc.png"
                    alt="navIcon"
                />
            </a>
            <a href="#" @click.prevent="previous" class="column-1">
                <img
                    src="https://res.cloudinary.com/mide358/image/upload/c_scale,h_27,w_13/v1570621434/Vector_ag4hnv.png"
                    alt="navIcon"
                />
            </a>
            <div class="column-2">Client</div>
           <a href="#" @click.prevent="next" id="NextStep3Upper" class="column-3 float-right" style="border: 1px solid gray;
               background: #0ABAB5 !important;">NEXT</a>
        </nav>
    </header>

    <div class="cli-info">
        <div>
            <p class="what-cli">What Client is it for?</p>
        </div>
        <form method="post" action="/estimate/create/step4" id="form">
            @csrf
            <div class="cli-box" style="color: #919191">
                <div class="sub-box">
                <p class="txt">An already existing Client</p>
                <select name="client" class="select-project" style="color: #919191">
                    <option value="new" selected>Select Client</option>
                    @foreach($clients as $client)
                    <option value="{{$client->id}}">{{$client->name}}</option>
                    @endforeach
                </select>
                </div>
                <a class="sub-box" onClick="next(event)">
                    <p class="cli-text">A new Client</p>
                </a>
            </div>

            <div class="footer-next">
                <button id="NextStep3form" class=""type="submit" style="border: 1px solid gray;
                                 background: #0ABAB5 !important; height: 70px; width: 200px;color:#fff!important">NEXT</button>
            </div>
            </form>
    </div>
</div>


<button type="submit" class="btn disabled my-5 mx-auto" id="btn" >NEXT</button>

</div>
</form>
@endsection

@section('script')
<script>
    function next(e){
        let form = document.querySelector('#form');
        form.submit();
    }

</script>
@endsection

  </script>
@endsection

