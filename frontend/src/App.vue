<template>
    <div id="app">
        <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal"><router-link to="/">JustTaxi</router-link></h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <router-link class="p-2 text-dark" v-bind:to="{name: 'About'}">О нас</router-link>
                <router-link class="p-2 text-dark" v-bind:to="{name: 'Employees'}">Наши сотрудники</router-link>
                <router-link class="p-2 text-dark" v-bind:to="{name: 'Feedback'}">Отзывы</router-link>
                <router-link class="p-2 text-dark" v-bind:to="{name: 'Cars'}">Наши автомобили</router-link>
            </nav>
            <router-link class="btn btn-outline-primary" v-bind:to="{name: 'SignIn'}">Войти</router-link>
        </header>

        <main>
            <router-view/>
        </main>

        <footer class="pt-4 my-md-5 pt-md-5 border-top container">
            <div class="row">
                <div class="col-12 col-md">
                    <img class="mb-2" src="../public/img/logo.jpg" alt="" width="24" height="24">
                    <small class="d-block mb-3 text-muted">&copy; 2017-2020</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Пользователям</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Скачать приложение</a></li>
                        <li><a class="text-muted" href="#">Написать в поддержку</a></li>
                        <li><a class="text-muted" href="#">Узнать о безопасности</a></li>
                        <li><a class="text-muted" href="#">Вызвать такси</a></li>
                        <li><a class="text-muted" href="#">Новости сервиса</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Водителям</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Стать водителем в парке</a></li>
                        <li><a class="text-muted" href="#">Стать замозанятым</a></li>
                        <li><a class="text-muted" href="#">Стать курьером</a></li>
                        <li><a class="text-muted" href="#">Арендовать авто</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Бизнесу</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Подключить поездки</a></li>
                        <li><a class="text-muted" href="#">Подключить доставку</a></li>
                    </ul>
                </div>
            </div>
        </footer>

     </div>
 </template>

