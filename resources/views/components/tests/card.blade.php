@props([
'message'=> '初期値です。',
'title',
'content' => '本文初期値です。'
])

<div class="border-dashed border-4 shadow-md w-1/4 p-2 ">
  <div>{{$title}}</div>
  <div>画像</div>
  <div>{{$content}}</div>
  <div class="bg-red">おおお</div>
  <div>{{ $message }}</div>
</div>