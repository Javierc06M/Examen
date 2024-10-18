<!-- escribe tus estilos css aquí -->
<style>
    .text-aquamarine {
        color: aquamarine;
    }

    .container-form {
        margin: 20px auto;
        border-radius: 5px;
        padding: 20px;
        justify-content: space-around;
        display: flex;
    }

    .container-form span {
        font-weight: bold;
        font-size: 30px;
        margin-bottom: 20px;
        margin-left: 20px;
        display: flex ;
        justify-content: start;
        }

    .container-form form {
        display: flex;
        flex-direction: column;
        width: 400px;
        margin-left: 20px;
    }

    .container-form label,
    .container-form input{
        margin-bottom: 10px;
    }

    .container-form button {
        padding: 10px 20px;
        background-color: aqua;
        color: white;
        border: none;
        border-radius: 10px;
        cursor: pointer;
    }

    .container-form button:hover {
        background-color: blue;
    }

    .container-calculadora {
        margin: 20px auto;
        border-radius: 5px;
        padding: 20px;
        justify-content: space-around;
        display: flex;
        flex-direction: column;
    }

    .container-operacion {
        display: flex;
        justify-content: space-between;
    }

    .container-operacion .numero form {
        display: flex;
        flex-direction: column;
    }

    .container-operacion .numero form label {
        margin-bottom: 10px;
        font-size: 20px;
        font-weight: bolder;        display: flex ;
        justify-content: start;
    }

    .container-operacion .numero form input {
        padding: 10px;
        border: 1px solid black;
        border-radius: 5px;
        margin-bottom: 20px;
        width: 100%;
    }

    .container-operacion .numero form button {
        padding: 10px 20px;
        background-color: aqua;
        color: white;
        border: none;
        border-radius: 10px;
        cursor: pointer;
    }

    .container-operacion .numero form button:hover {
        background-color: blue;
    }

    .container-calculadora .resultado {
        display: flex;
        flex-direction: column;
        font-size: 20px;
    }

    @media screen and (max-width: 600px) {
       .container-form {
            flex-direction: column;
        }
       .container-operacion {
            flex-direction: column;
        }
       .container-calculadora {
            flex-direction: column;
        }
    }

    @media screen and (max-width: 400px) {
       .container-form {
            width: 100%;
        }
       .container-operacion {
            width: 100%;
        }
       .container-calculadora {
            width: 100%;
        }
    }

    .table span {
        display: flex;
        font-size: 30px;
        font-weight: bolder;
        justify-content: center;
    }

    .table table {
        width: 100%;
        border-collapse: collapse;
    }

    .thead {
        background-color: red;
        color: white;
        font-weight: bold;
        text-align: center;
    }

    .th {
        padding: 10px;
        border-collapse: collapse;
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        background-color: orange;
    }
</style>

</style>

</style>