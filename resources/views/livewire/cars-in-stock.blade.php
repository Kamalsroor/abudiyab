<div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    {{-- @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif --}}

    <form wire:submit.prevent="store">

        @component('dashboard::components.table-box')
        @slot('title')
            @lang('cars.actions.list')
        @endslot

        <thead>
            <tr>
                <th>@lang('cars.attributes.name')</th>
                <th>@lang('cars.attributes.code')</th>
                <th>@lang('cars.attributes.model')</th>
                <th>@lang('categories.singular')</th>
                <th>@lang('manufactories.singular')</th>
                <th style="width: 160px">العدد</th>
            </tr>
        </thead>
        <tbody>

        @forelse($cars as $car)
            <tr>
                <td>
                    <a href="{{ route('dashboard.cars.show', $car) }}"
                    class="text-decoration-none text-ellipsis">
                        {{ $car->name }}
                    </a>
                </td>
                <td>{{ $car->code }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->category ? $car->category->name : "" }}</td>
                <td>{{ $car->manufactory ? $car->manufactory->name : "" }}</td>
                <td style="width: 160px">
                    <input type="number" class="form-control" id="exampleFormControlInput{{$car}}"  min="0" max="10000" step="1" value="0"  wire:model.defer="carStock.{{$car->id}}.count">
                    @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                    {{-- @include('dashboard.cars.partials.actions.show') --}}
                    {{-- @include('dashboard.cars.partials.actions.edit') --}}
                    {{-- @can('update', $car)
                        <button wire:click="edit({{ $car->id }})" class="btn btn-outline-primary btn-sm">
                            <i class="fas fa fa-fw fa-edit"></i>
                        </button>
                    @endcan --}}
                    {{-- @include('dashboard.cars.partials.actions.delete') --}}
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('cars.empty')</td>
            </tr>
        @endforelse


        @slot('footer')
            {{ BsForm::submit()->label(trans('cars.actions.save')) }}
        @endslot
        {{-- @if($cars->hasPages())
            @slot('footer')
                {{ $cars->links() }}
            @endslot
        @endif --}}
        @endcomponent


    </form>

        {{-- {{ $cars->lisnks() }} --}}



</div>
