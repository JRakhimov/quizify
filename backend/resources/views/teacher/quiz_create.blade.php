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

        <div class="pt-3">
            <h3 class="sub-title mb-2">New question info</h3>

            <div class="row">
                <div class="col-4">
                    <h4 class="input-title mb-1">Type</h4>

                    <label class="app-select-label">
                        <select class="app-select-option">
                            <option value="hide">Choose the question type</option>
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

{{--        <div--}}
{{--            class="row flex-column question-constructor px-5 mt-5"--}}
{{--            v-for="(question, index) in questions"--}}
{{--            :key="index"--}}
{{--        >--}}
{{--            <div class="col qs-title mb-3">--}}
{{--                <Question v-model="question.questionText" :questionNumber="index + 1"></Question>--}}
{{--            </div>--}}

{{--            <div class="col qs-answers">--}}
{{--                <Answer--}}
{{--                    :attach="true"--}}
{{--                    @checked="checkAnswer(index, $event)"--}}
{{--                    @mounted="mountAnswers(index, $event)"--}}
{{--                    :type="question.questionType"--}}
{{--                    class="mb-2"--}}
{{--                ></Answer>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row controllers flex-row-reverse px-5 mt-2">--}}
{{--            <div class="next-btn order-3">--}}
{{--                <button @click="addQuestion()">Next Question</button>--}}
{{--            </div>--}}

{{--            <div class="print-btn order-2">--}}
{{--                <button>Print</button>--}}
{{--            </div>--}}

{{--            <div class="done-btn order-1">--}}
{{--                <button @click="submitQuestions()">Done</button>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
@endsection
