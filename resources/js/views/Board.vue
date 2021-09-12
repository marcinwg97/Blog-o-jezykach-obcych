<template>
        <div class="container">
        <div class="jumbotron col-12 offset-1">
  <h1 class="display-4">Witaj w panelu administratora!</h1>
  <p class="lead">Znajdziesz tu wszystkie wszystkie informacje dotyczące systemu zarządzania treścią.</p>
</div>
</div>
    </template>

    <style scoped>
    
    </style>

    <script>

        export default {
         
            beforeRouteEnter (to, from, next) {
                if ( ! localStorage.getItem('jwt')) {
                    return next('login')
                }

                next()
            }
    }
    </script>
