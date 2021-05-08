@extends('layouts.master')

@section('page-title')
    Create new quiz
@endsection

@section('content')
    @include('partials.teacher_header')

    <div class="container mt-3 create-quiz">
        <div class="row page-name">
            <div class="col">
                <h2>Create a quiz</h2>
            </div>
        </div>

        <div class="pt-3">
            <h3 class="sub-title mb-2">General quiz info</h3>

            <div class="row">
                <div class="col-4">
                    <h4 class="input-title mb-1">Subject</h4>

                    <label class="app-select-label">
                        <select class="app-select-option">
                            <option value="hide">Choose the subject</option>
                        </select>
                    </label>
                </div>

                <div class="col-4">
                    <h4 class="input-title mb-1">Date</h4>

                    <div class="d-flex">
                        <input type="number" class="app-input mr-2" placeholder="Day">
                        <input type="number" class="app-input" placeholder="Month">
                    </div>
                </div>

                <div class="col-4">
                    <h4 class="input-title mb-1">Time Limit</h4>
                    <input type="number" class="app-input" placeholder="Minutes">
                </div>
            </div>
        </div>

        <div class="pt-3" id="questions">
            <h3 class="sub-title mb-2">Questions</h3>

            <div class="question-constructor mt-3">
                <div class="mb-3">
                    <div class="question-title d-flex justify-content-center align-items-center mb-2">
                        <div class="question-number">1</div>

                        <textarea
                            name="Question input"
                            rows="2"
                            class="question-input"
                            placeholder="Type a question..."
                        ></textarea>
                    </div>
                </div>

                <div class="question-answer-variant d-flex">
                    <div class="radio-btn d-flex justify-content-center align-items-center">
                        <i class="fa fa-check" aria-hidden="true"></i>
                    </div>

                    <input type="text" class="answer-input" placeholder="Answer text...">

                    <button class="app-raised-button red ripple">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="pt-3">
            <h3 class="sub-title mb-2">New question info</h3>

            <div class="row">
                <div class="col-4">
                    <h4 class="input-title mb-1">Type</h4>

                    <label class="app-select-label">
                        <select class="app-select-option">
                            <option value="hide" disabled selected>Choose the question type</option>
                        </select>
                    </label>
                </div>

                <div class="col-4">
                    <h4 class="input-title mb-1">Points</h4>

                    <div class="d-flex">
                        <input type="number" class="app-input" placeholder="Point">
                    </div>
                </div>

                <div class="col-4">
                    <h4 class="input-title mb-1">Actions</h4>

                    <div class="row ml-1">
                        <button class="app-raised-button ripple mr-2">Add question</button>
                        <button class="app-raised-button ripple green">Done</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
