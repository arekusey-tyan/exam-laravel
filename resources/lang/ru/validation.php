<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute должен быть принят.',
    'accepted_if' => ':attribute должен быть принят, когда :other равен :value.',
    'active_url' => ':attribute не является допустимым URL-адресом.',
    'after' => ':attribute должен быть датой после :date.',
    'after_or_equal' => ':attribute должен быть датой после или равен :date.',
    'alpha' => ':attribute должен содержать только буквы.',
    'alpha_dash' => ':attribute должен содержать только буквы, цифры, тире и подчеркивания.',
    'alpha_num' => ':attribute должен содержать только буквы и цифры.',
    'array' => ':attribute должно быть массивом.',
    'before' => ':attribute должен быть датой, предшествующей :date.',
    'before_or_equal' => ':attribute должен быть датой, предшествующей или равной :date.',
    'between' => [
        'numeric' => ':attribute должен находиться в диапазоне от :min до :max.',
        'file' => ':attribute должен находиться в диапазоне от :min до :max киллобайт.',
        'string' => ':attribute должен находиться в диапазоне от :min до :max символов.',
        'array' => ':attribute должен находиться в диапазоне от :min до :max элементов.',
    ],
    'boolean' => 'Поле :attribute должно иметь значение true или false.',
    'confirmed' => 'Подтверждение :attribute не соответствует.',
    'current_password' => 'Введен неверный пароль.',
    'date' => ':attribute не является допустимой датой.',
    'date_equals' => ':attribute должна быть дата, равная :date.',
    'date_format' => ':attribute не соответствует форматуне соответствует формату :format.',
    'different' => ':attribute и :other должны отличаться.',
    'digits' => ':attribute должно быть :digits цыфр.',
    'digits_between' => ':attribute должен находиться между цифрами :min 0 :max.',
    'dimensions' => ':attribute имеет недопустимые размеры изображения.',
    'distinct' => 'Поле :attribute имеет повторяющееся значение.',
    'email' => ':attribute должен быть действительным адресом электронной почты.',
    'ends_with' => ':attribute должен заканчиваться одним из следующих: :values.',
    'exists' => 'Выбранный :attribute недопустим.',
    'file' => ':attribute должен быть файлом.',
    'filled' => 'Поле :attribute должно иметь значение.',
    'gt' => [
        'numeric' => ':attribute должен быть больше :value.',
        'file' => ':attribute должен быть больше :value киллобайт.',
        'string' => ':attribute должен быть больше :value символов.',
        'array' => ':attribute должен быть больше :value элементов.',
    ],
    'gte' => [
        'numeric' => ':attribute должен быть больше или равен :value.',
        'file' => ':attribute должен быть больше или равен :value kilobytes.',
        'string' => ':attribute должен быть больше или равен :value characters.',
        'array' => ':attribute должен иметь :value элементов или более.',
    ],
    'image' => ':attribute должен быть изображением.',
    'in' => 'Выбранный атрибут :attribute некорректен.',
    'in_array' => 'Поле :attribute не существует в :other.',
    'integer' => ':attribute должен быть числом.',
    'ip' => ':attribute должен быть действительным IP-адрессом.',
    'ipv4' => ':attribute должен быть действительным IPv4-адресом.',
    'ipv6' => ':attribute должен быть действительным IPv6-адресом.',
    'json' => ':attribute должна быть допустимая строка JSON.',
    'lt' => [
        'numeric' => ':attribute должен быть меньше :value.',
        'file' => ':attribute должен быть меньше :value киллобайт.',
        'string' => ':attribute должен быть меньше :value символов.',
        'array' => ':attribute должен быть меньше :value элементов.',
    ],
    'lte' => [
        'numeric' => ':attribute должен быть меньше или равен :value.',
        'file' => ':attribute должен быть меньше или равен :value киллобайт.',
        'string' => ':attribute должен быть меньше или равен :value символов.',
        'array' => ':attribute должно быть не более :value элементов.',
    ],
    'max' => [
        'numeric' => ':attribute не должен быть больше :max.',
        'file' => ':attribute не должен быть больше :max киллобайт.',
        'string' => ':attribute не должен быть больше :max символов.',
        'array' => ':attribute не должен быть больше :max элементов.',
    ],
    'mimes' => ':attribute должен быть файлом типа: :values.',
    'mimetypes' => ':attribute должен быть файлом типа: :values.',
    'min' => [
        'numeric' => ':attribute должен быть не менее :min.',
        'file' => ':attribute должен быть не менее :min киллобайт.',
        'string' => ':attribute должен быть не менее :min символов.',
        'array' => ':attribute должен быть не менее :min элементов.',
    ],
    'multiple_of' => ':attribute должен быть кратен :value.',
    'not_in' => 'Выбранный атрибут :attribute недопустим',
    'not_regex' => 'Формат атрибута :attribute недопустим.',
    'numeric' => ':attribute должен быть числом.',
    'password' => 'Введен неверный пароль.',
    'present' => 'Поле :attribute должно присутствовать.',
    'regex' => 'Формат атрибута :attribute недопустим.',
    'required' => 'Поле :attribute является обязательным для заполнения.',
    'required_if' => 'Поле :attribute является обязательным, когда :other равен :value.',
    'required_unless' => 'Поле :attribute является обязательным, если только :other is inне равен :values.',
    'required_with' => 'Поле :attribute является обязательным, если присутствует параметр :values.',
    'required_with_all' => 'Поле :attribute является обязательным, если присутствуют :values.',
    'required_without' => 'Поле :attribute является обязательным, если параметр :values отсутствует.',
    'required_without_all' => 'Поле :attribute является обязательным, если ни одно из :values не присутствует.',
    'prohibited' => 'Поле :attribute запрещено.',
    'prohibited_if' => 'Поле :attribute запрещено, если :other равно :value.',
    'prohibited_unless' => 'Поле :attribute запрещено, если только :other не равно :values.',
    'prohibits' => 'Поле :attribute запрещает присутствие present.',
    'same' => ':attribute и :other должны совпадать.',
    'size' => [
        'numeric' => ':attribute должен быть :size.',
        'file' => ':attribute должен быть :size киллобайт.',
        'string' => ':attribute должен быть :size символов.',
        'array' => ':attribute должен содержать :size элементов.',
    ],
    'starts_with' => ':attribute должен начинаться с одного из следующих значений: :values.',
    'string' => ':attribute должен быть строкой.',
    'timezone' => ':attribute должен быть допустимым часовым поясом.',
    'unique' => ':attribute уже был использован.',
    'uploaded' => 'Не удалось загрузить :attribute.',
    'url' => ' :attribute должен быть допустимым URL-адресом.',
    'uuid' => ':attribute должен быть допустимым UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];