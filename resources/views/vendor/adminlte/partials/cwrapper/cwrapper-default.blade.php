@inject('layoutHelper', 'JeroenNoten\LaravelAdminLte\Helpers\LayoutHelper')

@if($layoutHelper->isLayoutTopnavEnabled())
    @php( $def_container_class = 'container' )
@else
    @php( $def_container_class = 'container-fluid' )
@endif

<?php
    // 初期値を設定
    $initial_value = "コマーサー商品アカウント";
    // $group_member = group_member::get();
?>

{{-- Default Content Wrapper --}}
<div class="content-wrapper {{ config('adminlte.classes_content_wrapper', '') }}">

    {{-- Content Header --}}
    @hasSection('content_header')
        <div class="content-header">
            <div class="{{ config('adminlte.classes_content_header') ?: $def_container_class }}">
                @yield('content_header')
            </div>
        </div>
    @endif
<!-- 依頼アカウント確認 -->
    {{-- Main Content --}}
    <div class="container-xl-10">
    <form th:action="@{/book/search}" method="get">
        <div class="content">
            <div class="{{ config('adminlte.classes_content') ?: $def_container_class }}">
                <div class="col-xs-12 bg-Light">
            <!-- <div class="col-sm-4"> -->
                    <!-- <div class="text-center my-4"> -->
                    <!-- <div class="form-group row">
                        <label for="inputPassword6">コマーサー</label>
                            <div class="col-sm-10">
                            <input type="text" readonly class="form-control" id="staticEmail" value=<?= $initial_value ?>>
                            <button class="btn btn-sm btn-outline-secondary" type="submit">検索</button>
                            </div>
                    </div> -->
                    <div class="text-right">
                        <button class="col-md-2 btn btn-sm-3 btn-outline-secondary" type="submit">依頼決定</button>
                        <button class="col-md-2 btn btn-sm-4 btn-outline-secondary" type="submit">クリア</button>
                    </div>
                    <div class="text-right">
                        <div class="col-sm-6 bg-secondary">

                        </div>   
                    </div> 
                    <div class="form-group form-inline input-group-sm">
                        <label for="name" class="col-md-1 control-label">コマーサー</label>
                        <input type="text" readonly class="form-control" id="staticEmail" placeholder="コマーサー名" value=<?= $initial_value ?>>
                    </div>
                    <div class="form-group form-inline input-group-sm">
                        <label for="name" class="col-md-1 control-label">商品</label>
                        <input type="text" readonly class="form-control" id="staticEmail" placeholder="Product_ID" value=<?= $initial_value ?>>
                        <label for="isbn" class="col-md-1 control-label"></label>
                        <input type="text" readonly class="form-control" id="staticEmail" placeholder="商品" value=<?= $initial_value ?>>
                        <!-- <label for="isbn" class="col-md-1 control-label"></label>
                        <input type="text" readonly class="form-control" id="staticEmail" value=<?= $initial_value ?>> -->
                    </div>
                    <div class="form-group form-inline input-group-sm">
                        <label for="name" class="col-md-1 control-label">Benefiter</label>
                        <input type="text" readonly class="form-control" id="staticEmail" placeholder="Benefiter名" value=<?= $initial_value ?>>
                        <label for="isbn" class="col-md-1 control-label"></label>
                        <input type="text" readonly class="form-control" id="staticEmail" placeholder="依頼文章" value=<?= $initial_value ?>>
                        <!-- <label for="isbn" class="col-md-1 control-label"></label>
                        <input type="text" readonly class="form-control" id="staticEmail" value=<?= $initial_value ?>> -->
                    </div>
                <!-- </div> -->
                </div>
            </div>
        </div>
    </form>
    </div>           
    <!-- コマーサー検索 -->
    <div class="container-xl-10">
    <form th:action="@{/book/search}" method="get">
        <div class="content">
            <div class="{{ config('adminlte.classes_content') ?: $def_container_class }}">
                <div class="form-group row">
                    <div class="col-sm-6 bg-secondary">
                        <!-- <div class="brown border col-sm-4"></div> -->
                        <div class="form-group input-group-sm">
                            <label for="name" class="col-sm-3 control-label">コマーサー</label>
                            <input type="text" class="form-control col-md-6" id="name" name="name" placeholder="検索">
                            <!-- <label for="name" class="col-md-6 control-label"></label>
                            <input type="text" class="form-control col-md-5" id="name" name="name" placeholder="検索"> -->
                        </div>
                    </div>
                    <div class="col-sm-6 bg-secondary">
                        <div class="form-group input-group-sm">
                                <label for="name" class="col-sm-3 control-label">Benefiter</label>
                                <button class="col-md-2 btn btn-sm-4 btn btn-success" type="submit">CSV</button>
                                <button class="col-md-2 btn btn-sm-4 btn btn-success" type="submit">更新</button>
                                <input type="text" class="form-control col-md-6" id="name" name="name" placeholder="検索">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
    <!-- 商品検索 -->
    <div class="container-xl-6">
    <form th:action="@{/book/search}" method="get">
        <div class="content">
            <div class="{{ config('adminlte.classes_content') ?: $def_container_class }}">
                <div class="form-group row">
                     <div class="col-sm-6 bg-secondary">
                            <!-- <div class="brown border col-sm-4"></div> -->
                        <div class="form-group input-group-sm float-sm-center">
                                <label for="name" class="col-sm-6 control-label">商品</label>
                                <input type="text" class="form-control col-md-6" id="name" name="name" placeholder="検索">
                                <!-- <label for="name" class="col-md-6 control-label"></label>
                                <input type="text" class="form-control col-md-5" id="name" name="name" placeholder="検索"> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>                
    </form>
    </div> 
 @yield('content')
</div>
