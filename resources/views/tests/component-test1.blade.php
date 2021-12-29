<x-tests.app>
  <x-slot name="header">
    ヘッダーテスト１
  </x-slot>
  component-test1

  <x-tests.card title="タイトル" content="本文" :message="$message"/>
  
</x-tests.app>