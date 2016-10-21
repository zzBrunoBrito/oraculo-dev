@section('title','Oráculo-Histórico')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default ">
        
        <div class="panel-body">

        <?php
        foreach ($equip as $e) {
        	echo $e->nome;
        	echo '<br>';
        }
        ?>


        </div>
    </div>
</div>

@endsection