@extends('layouts.app')

@section('page_description')
@section ('page_title', 'About this project')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Infor') }}</div>

                <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tempor sapien vel sagittis egestas. 
Etiam gravida velit vitae risus maximus scelerisque. Sed varius nulla vitae orci tincidunt eleifend. 
Vivamus mollis dolor nibh, a rhoncus sem scelerisque a. 
Ut lacinia et quam in dapibus. Integer mollis dolor nisi, cursus consectetur orci consectetur ut. 
In dignissim mauris dui. Cras fringilla metus at est dictum tincidunt.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
