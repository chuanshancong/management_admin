@inject('layoutHelper', 'JeroenNoten\LaravelAdminLte\Helpers\LayoutHelper')

@if($layoutHelper->isLayoutTopnavEnabled())
    @php( $def_container_class = 'container' )
@else
    @php( $def_container_class = 'container-fluid' )
@endif

<?php
    // 初期値を設定
    $initial_value = "コマーサー商品アカウント";
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
                    <div class="form-group form-inline input-group-sm">
                        <label for="name" class="col-md-1 control-label">コマーサー</label>
                        <input type="text" class="form-control col-md-1" id="name" name="name" placeholder="コマーサー">
                            <div class="text-right">
                                <button class="btn btn-sm btn-outline-secondary" type="submit">依頼決定</button>
                                <button class="btn btn-sm btn-outline-secondary" type="submit">クリア</button>
                            </div>
                    </div>
                    <div class="form-group form-inline input-group-sm">
                        <label for="name" class="col-md-1 control-label">商品</label>
                        <input type="text" readonly class="form-control" id="staticEmail" value=<?= $initial_value ?>>
                        <label for="isbn" class="col-md-1 control-label"></label>
                        <input type="text" readonly class="form-control" id="staticEmail" value=<?= $initial_value ?>>
                        <!-- <label for="isbn" class="col-md-1 control-label"></label>
                        <input type="text" readonly class="form-control" id="staticEmail" value=<?= $initial_value ?>> -->
                    </div>
                    <div class="form-group form-inline input-group-sm">
                        <label for="name" class="col-md-1 control-label">アカウント</label>
                        <input type="text" readonly class="form-control" id="staticEmail" value=<?= $initial_value ?>>
                        <label for="isbn" class="col-md-1 control-label"></label>
                        <input type="text" readonly class="form-control" id="staticEmail" value=<?= $initial_value ?>>
                        <!-- <label for="isbn" class="col-md-1 control-label"></label>
                        <input type="text" readonly class="form-control" id="staticEmail" value=<?= $initial_value ?>> -->
                    </div>
                <!-- </div> -->
                </div>
            </div>
        </div>
    </form>
@yield('users')
</div>