@extends('layouts.app')

<style>
        @charset "UTF-8";

.multi-step {
    margin: 1em 0;
}

.multi-step-list {
    position: relative;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    list-style-type: none;
    padding: 0;
}

.multi-step-list .multi-step-item:first-child {
    margin-left: 0;
}

.multi-step-list .multi-step-item:last-child {
    margin-right: 0;
}

.multi-step-item {
    position: relative;
    width: 100%;
    margin: 0 0.3333333333em;
    z-index: 2;
    border-radius: 0.2em;
}

@media only screen and (max-width: 786px) {
    .multi-step-item {
        margin: 0 0.3333333333em;
    }
}

.multi-step-item .item-title,
.multi-step-item .item-subtitle {
    position: relative;
    margin: 0;
    z-index: 2;
}

@media only screen and (max-width: 786px) {
    .multi-step-item .item-subtitle {
        display: none;
    }
}

.multi-step-item .item-title {
    color: #4285f4;
    font-weight: 600;
    margin: 0;
}

.multi-step-item.active:hover {
    cursor: pointer;
}

.multi-step-item.current .item-title,
.multi-step-item.current .item-subtitle {
    color: #fff;
}

.multi-step-item.active.current:hover .item-title,
.multi-step-item.active.current:hover .item-subtitle {
    color: #4285f4;
}

.multi-step-item.error:after {
    position: absolute;
    top: 50%;
    z-index: 2;
    transform: translateY(-50%);
    right: 0.5em;
    content: "!";
    color: #d50000;
}

.item-wrap {
    padding: 1em;
    position: relative;
    height: 100%;
}

.item-wrap:before,
.item-wrap:after {
    position: absolute;
    left: 0;
    content: " ";
    width: 100%;
    height: 50.5%;
    z-index: 1;
    background-color: #eee;
}

.item-wrap:before {
    top: 0;
    transform: skew(20deg);
    border-radius: 0.2em 0.2em 0 0;
}

.item-wrap:after {
    bottom: 0;
    transform: skew(-20deg);
    border-radius: 0 0 0.2em 0.2em;
}

.current .item-wrap:before,
.current .item-wrap:after {
    background-color: #4285f4;
}

.active:hover .item-wrap:before,
.active:hover .item-wrap:after {
    background-color: #d8f1ff;
}

.multi-step-item.error .item-title,
.multi-step-item.error .item-subtitle {
    padding-right: 2em;
}

.multi-step-item:first-child .item-wrap,
.multi-step-item:last-child .item-wrap {
    width: 100%;
    border-radius: 0.2em;
}

.multi-step-item:first-child .item-wrap:before,
.multi-step-item:first-child .item-wrap:after,
.multi-step-item:last-child .item-wrap:before,
.multi-step-item:last-child .item-wrap:after {
    width: 50%;
}

.multi-step-item:first-child .item-wrap {
    background: linear-gradient(to right, #eee 95%, transparent 5%);
}

.multi-step-item:first-child .item-wrap:before,
.multi-step-item:first-child .item-wrap:after {
    left: 50%;
}

.active.multi-step-item:first-child:hover .item-wrap {
    background: linear-gradient(to right, #d8f1ff 95%, transparent 5%);
}

.current.multi-step-item:first-child .item-wrap {
    background: linear-gradient(to right, #4285f4 95%, transparent 5%);
}

.multi-step-item:last-child .item-wrap {
    background: linear-gradient(to left, #eee 95%, transparent 5%);
}

.multi-step-item:last-child .item-wrap:before,
.multi-step-item:last-child .item-wrap:after {
    right: 50%;
}

.active.multi-step-item:last-child:hover .item-wrap {
    background: linear-gradient(to left, #d8f1ff 95%, transparent 5%);
}

.current.multi-step-item:last-child .item-wrap {
    background: linear-gradient(to left, #4285f4 95%, transparent 5%);
}

.checked .multi-step-item.completed:after {
    position: absolute;
    top: 50%;
    z-index: 2;
    transform: translateY(-50%);
    right: 0.5em;
    content: "✓";
    color: #54b948;
}

.numbered .multi-step-item {
    counter-increment: step-counter;
}

.numbered .multi-step-item .item-wrap {
    padding-left: 5em;
}

.numbered .multi-step-item:before {
    content: counter(step-counter);
    position: absolute;
    top: 50%;
    left: 0.75em;
    transform: translateY(-50%);
    min-width: 1.65em;
    padding: 0.5em 1em;
    z-index: 2;
    font-size: 0.85em;
    background-color: #999;
    color: #fff;
    font-weight: 600;
    text-align: center;
    border-radius: 0.2em;
}

.item-wrap .badge {
    position: absolute;
    right: 0.5em;
    top: 50%;
    transform: translateY(-50%);
    z-index: 3;
}

.error .item-wrap .badge {
    right: 2em;
}

.error .item-wrap .badge~.item-title,
.error .item-wrap .badge~.item-subtitle {
    padding-right: 3em;
}

.multi-step-loading {
    opacity: 0.75;
}

.current.multi-step-loading:before {
    border-color: #fff;
    border-top-color: transparent;
    opacity: 1;
}

input:invalid {
    color: red;
}

[type="date"]::-webkit-inner-spin-button {
  display: none;
}
[type="date"]::-webkit-calendar-picker-indicator {
  display: none;
}

input[type="date"]::-webkit-input-placeholder{ 
    visibility: hidden !important;
}

</style>

@section('content')
<div class="container">
    @livewire('multi-step-register')
</div>
@endsection
