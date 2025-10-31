<tr>
    <td>{{ $user->name }}</td>
    <td>
        <!-- Вставляем компонент кнопки -->
        @include('partials.toggle_button', ['userId' => $user->id])
    </td>
</tr>
<!-- строка для описания, скрыта по умолчанию -->
<tr id="description-row-{{ $user->id }}" style="display: none;">
    <td colspan="2">
        {{ $user->description ?? 'Описание отсутствует' }}
    </td>
</tr>