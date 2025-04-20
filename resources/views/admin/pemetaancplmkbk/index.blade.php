@extends('layouts.app')

@section('content')
<div class="mx-5 md:mx-20 my-10">
    <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-6 text-[#5460B5]">Pemetaan CPL - BK - MK</h2>
    <hr class="border-t-2 border-[#5460B5] mb-6 w-24 mx-auto">

    <div class="overflow-auto border border-gray-300 rounded-lg shadow-md">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-green-500 text-white text-sm text-center">
                <tr>
                    <th class="px-4 py-3 border-r border-white text-left">CPL / BK</th>
                    @foreach($bks as $bk)
                        <th class="px-4 py-3 border-r border-white">{{ $bk->kode_bk ?? $bk->id_bk }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody class="bg-white text-sm text-gray-700">
                @foreach($cpls as $cpl)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3 font-semibold border border-gray-200">
                            {{ $cpl->kode_cpl ?? $cpl->id_cpl }}
                        </td>
                        @foreach($bks as $bk)
                            <td class="px-4 py-3 border border-gray-200">
                                @if(isset($matrix[$cpl->id_cpl][$bk->id_bk]))
                                    <ul class="list-disc pl-5 space-y-1">
                                        @foreach(array_unique($matrix[$cpl->id_cpl][$bk->id_bk]) as $mk)
                                            <li>{{ $mk }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    <span class="text-gray-400">-</span>
                                @endif
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
