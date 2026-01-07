@extends('layouts.app')

@section('content')
    <x-common.page-breadcrumb pageTitle="Bar chart" />
    <div class="space-y-6">
        <x-common.component-card title="Bar chart 1">
            <!-- ====== Bar Chart One Start -->
            <div class="custom-scrollbar max-w-full overflow-x-auto">
                <div id="chartOne" class="min-w-[1000px]"></div>
            </div>
            <!-- ====== Bar Chart One End -->
        </x-common.component-card>

        <x-common.component-card title="Line chart 2">
            <!-- ====== Line Chart Two Start -->
            <div class="custom-scrollbar max-w-full overflow-x-auto">
                <div id="chartEight" class="min-w-[1000px]"></div>
            </div>
            <!-- ====== Line Chart Two End -->
        </x-common.component-card>
    </div>
@endsection
