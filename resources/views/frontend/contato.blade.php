<?php
/**
 * Created by JS'Cordeiro Programas.
 * User: Sergio
 * Date: 07/11/2020
 * Time: 14:52
 */ ?>
@extends('layouts._appRG44Geral')
@section('titulo', ' - Contato')
@section('content')
    <div class="container-fluid contato-dados">
        <div class="row">
            <div class="col-md-8 col-sm-1">
                <h2>Fale comigo!</h2>
                <p>
                    Se estiver precisando de meus serviços ou precisar de mais informações sobre o meu trabalho, entre em contato.
                </p>
                <address>
                    <h1>RG44</h1>
                    <strong>Rua: </strong><span>Ruas das Orquidias, 2424</span><br>
                    <strong>Bairro: </strong> <span>Jardim das flores</span><br>
                    <strong>CEP: </strong> <span>87500-000</span><br>
                    <strong>Cidade/UF: </strong> <span>Pérola/PR.</span><br>
                </address>
                <address>
                    <strong><i class="fa fa-envelope"></i> </strong><span>contato@rg44.com.br</span><br>
                    <strong><i class="fa fa-phone"></i> </strong> <span>44 9.9999-5555</span><br>
                </address>


            </div>
            <div class="col-md-4 col-sm-1">
                <h2>Deixe aqui sua mensagem!</h2>
                <form>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Seu nome completo">
                    </div>
                    <div class="form-group">
                        <label for="email1">Endereço de email</label>
                        <input type="email" class="form-control" id="email1" aria-describedby="emailHelp"
                               placeholder="Deixe seu email">
                        <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com
                            ninguém.
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea name="mensagem" id="mensagem" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>

    </div>
@endsection
