@extends('app')

@section('content')
    <div class="row" id="gui">
        <div class="col-12">
            <div class="page-title">
                <h1>{!! __('messages.project-name') !!}</h1>
                <h3>
                    Index
                </h3>

                {{-- VUE JS APP --}}
                <div id="app">
                    <front-page></front-page>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('js')
    @parent()

    <script>
//        export default {
//            data: function () {
//                return {
//                    categories: [],
//                    products: []
//                }
//            },
//            mounted() {
//                this.loadCategories();
//                this.loadProducts();
//            },
//            methods: {
//                loadCategories: function () {
//
//                },
//                loadProducts: function () {
//
//                }
//            }
//        }


        var app = new Vue({
            el: '#app',
            data: {
                message: 'Hello Vue!'
            }
        })
    </script>
@endsection
