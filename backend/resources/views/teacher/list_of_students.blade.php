@extends('layouts.master')

@section('page-title')
    My quizzes
@endsection

@section("root-url")
    /teacher
@endsection

@section("logout-url")
    /login
@endsection

@section('content')
    @include('partials.teacher_header')

    <div id="read-quiz-page" class="container mt-3 mb-5">
        <div class="row page-name">
            <div class="col">
                <h2>Quiz 1</h2>
            </div>
        </div>

    <head>
        <style>

            {{-- table, th, td {
                border: 1px solid black;
            }

            p.solid {border-style: solid;}
            --}}
    .content-table {
        font-family: rubik, roboto;
        border-collapse: collapse;
        margin: 25px 0;
        width: 100%;
    }

    .content-table thead tr {
        color: #00ACB3;
        text-align: left;
        font-weight: bold;
        padding-bottom: 10px;
    }

    .content-table tbody td {
        padding: 12px 15px;
        background: #F4F4F4;
    }

    .content-table tbody tr {
        border-bottom: 10px solid #FFFFFF;
        padding-bottom: 15px;
    }


     td, th {
    text-align:center;
    padding: 12px;
    }

    .content-table tr td button {
        background-color: #8574A1; /* Green */
        border: none;
        color: white;
        padding: 8px 20px;
        text-align: right;
        text-decoration: none;
        display: inline-block;
        font-size: 15px;
        border-radius: 10px;
    }
            .content-table tr td button:hover {
                background-color: #6B5989;
            }

            .button__icon {
                display: inline-block;
                align-items: center;
                padding: 0px 0px;
                color: #fff;
                height: 100%;
            }

            .button__icon {
                font-size: 10px;
                 }

            .content-table td:first-of-type {
                border-top-left-radius: 10px;
                border-bottom-left-radius: 10px;
            }

            .content-table td:last-of-type {
                border-top-right-radius: 10px;
                border-bottom-right-radius: 10px;
            }
    {{-- }
    }tr:nth-child(even) {
    background-color: #dddddd;
    } --}}

    </style>
    </head>

    <body>
    <table class="content-table">
        <thead>
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Points</th>
            <th></th>
        </tr>

        </thead>

        <tr>
            <td>Nicole Streisland</td>
            <td>nicolest@gmail.com</td>
            <td>25</td>
            <td><button type="button" class="button">
                    <span class="button__text">See</span>
                    <span class="button__icon">
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                    </span>
                </button></td>
        </tr>

        <tr>
            <td>Nicole Streisland</td>
            <td>nicolest@gmail.com</td>
            <td>25</td>
            <td><button type="button" class="button">
                    <span class="button__text">See</span>
                    <span class="button__icon">
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                    </span>
                </button></td>
        </tr>

        <tr>
            <td>Nicole Streisland</td>
            <td>nicolest@gmail.com</td>
            <td>25</td>
            <td><button type="button" class="button">
                    <span class="button__text">See</span>
                    <span class="button__icon">
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                    </span>
                </button></td>
        </tr>

        <tr>
            <td>Nicole Streisland</td>
            <td>nicolest@gmail.com</td>
            <td>25</td>
            <td><button type="button" class="button">
                    <span class="button__text">See</span>
                    <span class="button__icon">
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                    </span>
                </button></td>
        </tr>

        <tr>
            <td>Nicole Streisland</td>
            <td>nicolest@gmail.com</td>
            <td>25</td>
            <td><button type="button" class="button">
                    <span class="button__text">See</span>
                    <span class="button__icon">
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                    </span>
                </button></td>
        </tr>

        <tr>
            <td>Nicole Streisland</td>
            <td>nicolest@gmail.com</td>
            <td>25</td>
            <td><button type="button" class="button">
                    <span class="button__text">See</span>
                    <span class="button__icon">
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                    </span>
                </button></td>
        </tr>

    </table>

        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
@endsection
