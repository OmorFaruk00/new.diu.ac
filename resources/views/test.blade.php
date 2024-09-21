@extends('layouts.master')
@section('content')
<style>
    #help-container button p {
    margin-bottom: 0;
    font-size: 14px;
}

.help-content {
    position: fixed;
    bottom: 0px;
    right: 10px;
    padding: 10px 20px;
    background-color: #2EAA4D;
    color: white;
    border: none;
    border-radius: 50px;
    cursor: pointer;
    z-index: 55;
}
.change-radious{
    border-radius: 50px 0px 0px 50px !important;
    padding: 10px 10px !important;
    right: 0px !important;
}
.new{
    border-radius: 50px !important;
    /* padding-left:  20px !important; */
    right: 10px !important;
}
.help-button{
    padding-top: 7px;
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    position: relative;
    margin-left: 10px;
}
.help-button:hover{
    color:#000;

}
.help-icon{
    font-size: 30px;
}
.time{
  font-size: 15px;
  background: #fff;
  color: #000;
  height: 20px;
  width: 20px;
  border-radius: 50%;
  padding: 2px 4px;
  position: absolute;
  top: -20%;
  right: 2%;
  display: none !important;

}
.help-content:hover .time{
    display: block !important;

}
</style>
<div class="py-5">

    <x-home.why />

<div class="d-flex help-content" id="help-content">
    <div>
        {{-- <i class="fa fa-info-circle " id="show-help-button" aria-hidden="true"></i> --}}
        <i class="fa fa-question-circle help-icon" id="show-help-button" aria-hidden="true"></i>
    </div>
    <a id="hide-help-button" class="help-button" >Admission  Help Desk  </a>
    <i class="fa fa-times time" id="times" aria-hidden="true"></i>
</div>
</div>

<script>

    document.addEventListener('DOMContentLoaded', (event) => {
    const showHelpButton = document.getElementById('show-help-button');
    const hideHelpButton = document.getElementById('hide-help-button');
    const closeModalButton = document.getElementById('times');
    const helpContent = document.querySelector('.help-content');
   

    closeModalButton.addEventListener('click', () => {
        hideHelpButton.style.display = 'none';
        closeModalButton.style.setProperty('display', 'none', 'important');
        helpContent.style.display = 'none';
        helpContent.classList.add('change-radious');
        helpContent.classList.remove('new');
    });

    showHelpButton.addEventListener('click', () => {
        hideHelpButton.style.display = 'block';
        closeModalButton.style.display = 'block';
        helpContent.classList.add('new');
        helpContent.classList.remove('change-radious');
       
    });

   
 

});
</script>

{{-- <x-new-footer /> --}}
@endsection