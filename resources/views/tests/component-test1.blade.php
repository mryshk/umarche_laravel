<x-tests.app>
  <x-slot name="header">
    ヘッダーテスト１
  </x-slot>
  component-test1

  <x-tests.card title="タイトル" content="本文" :message="$message" />
  <x-tests.card title="タイトル２" />
  <x-tests.card title="Cssを変更したい" class="bg-red-300 border-dashed border-4" />
</x-tests.app>