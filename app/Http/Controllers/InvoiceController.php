<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class InvoiceController extends Controller
{
    private $sortEquipment = ['Датчик давления в шинах', 'Адаптивный свет', 'Автоматический дальний свет', 'Фаркоп', 'Круиз-контроль', 'Система помощи при парковке', 'Камера', 'Камера 360', 'Проекционный дисплей', 'Открытие багажника без помощи рук', 'Электронная приборная панель', 'Бесключевой доступ', 'Электроскладывание зеркал', 'Система «старт-стоп»', 'Кожанный салон', 'Люк', 'Панорамная крыша', 'Обогрев рулевого колеса', 'Третий ряд сидений', 'Электрорегулировка сидений', 'Память положения сидений', 'Подогрев сидений', 'Вентиляция сидений', 'Премиум Аудиосистема', 'Мультимедиа система для задних пассажиров', 'Навигационная система', 'Android Auto/CarPlay', 'Розетка 220V', 'Массаж сидений', 'Доводчики две',];

    public function create(Request $request) {
        $answers = $request->input('answers');
        Log::info($answers);

        $fields['brand'] = $this->getByAns('Выберите марку осматриваемого авто', $answers);
        $fields['model'] = $this->getByAns('Напишите модель', $answers);
        $fields['clearVIN'] = $this->getByAns('Проверьте вин-код автомобиля на наличие ДТП по базам',
                                              $answers);
        $fields['year'] = $this->getByAns('Укажите год выпуска', $answers);
        $fields['capacity'] = $this->getByAns('Уточните у продавца точный объем двигателя и л.с. Сперва укажите объем ⬇',
                                              $answers);
        $fields['power'] = $this->getByAns('Лошадиные силы', $answers);
        $fields['gearbox'] = $this->getByAns('Какая КПП у авто?', $answers);
        $fields['color'] = $this->getByAns('Какой цвет кузова авто?', $answers);
        $fields['VIN'] = $this->getByAns('Укажите VIN код', $answers);
        $fields['mileage'] = $this->getByAns('Укажите точный пробег', $answers);
        $fields['drive'] = $this->getByAns('Какой привод у авто?', $answers);
        $fields['specification'] = $this->getByAns('Укажите спецификацию', $answers);
        $fields['guarantee'] = $this->getByAns('Спросите у продавца - есть ли гарантия?', $answers);
        $fields['guaranteeYear'] = $this->getByAns('До какого месяца и года?', $answers);
        $fields['smells'] = $this->getByAns('Присутствуют ли в салоне неприятные запахи?',
                                            $answers);
        $fields['tiresYear'] = $this->getByAns('Проверьте и укажите год резины', $answers);
        $fields['tiresStatus'] = $this->getByAns('Какое состояние резины', $answers);
        $fields['tiresBrand'] = $this->getByAns('Укажите производителя шин', $answers);
        $fields['photosTires'] = $this->getByAns('Сфотографируйте износ резины', $answers);
        $fields['photosVIN'] = $this->getByAns('Сфотографируйте шильдик с вин-номером и информацией об авто в проёме водительской двери, либо просто снизу лобового стекла',
                                               $answers);
        $fields['photosDocks'] = $this->getByAns('Сфотографируйте мулькию(птс авто) и какие-либо документы на авто',
                                                 $answers);
        $fields['photosGeneralOut'] = $this->getByAns('Обязательно сделайте качественные и четкие фото с хорошим освещением',
                                                      $answers);
        $fields['photosGeneralIn'] = $this->getByAns('Теперь сделайте фото общих планов салона',
                                                     $answers);
        $fields['price'] = $this->getByAns('Укажите последнюю цену авто', $answers);
        $fields['equipment'] = $this->getByAns('Укажите комплектацию авто', $answers);
        $fields['equipmentStatus'] = $this->getByAns('Проверьте как работают все функции авто',
                                                     $answers);
        $fields['allDefects'] = $this->getByAns('Напишите про все недочеты', $answers);
        $fields['last'] = $this->getByAns('Последний шаг!', $answers);
        $fields['video'] = $this->getByAns('Запишите видео (обязательно горизонтальное)', $answers);


        $fields['paintedParts'] = [];
        $fields['badParts'] = [];
        $fields['badPartsOut'] = [];
        $fields['badPartsIn'] = [];
        $paintSearch = 1;
        $badSearch = 1;
        $badSearchDirty = 1;
        $badSearch1 = 1;
        $badSearch2 = 1;
        for ($i = 0; $i < count($answers); $i++) {

            if ($paintSearch == 1 && str_contains($answers[$i]['q'],
                                                  'На какой из деталей распознан вторичный окрас?') && $answers[$i]['a'] != 'Все чисто 🙌') {
                $paintSearch = 0;
                while ($i < count($answers) && str_contains($answers[$i]['q'],
                                                            'распознан вторичный окрас?') && $answers[$i]['a'] != 'Больше нет 👍') {
                    $fields['paintedParts'][] = ['part' => $answers[$i++]['a'], 'rating' => $answers[$i++]['a'],];
                }
                $i--;

            }
            //Полностью по кругу осмотрите кузов автомобиля и его диски
            if ($badSearch == 1 && str_contains($answers[$i]['q'],
                                                'Сфотографируйте повреждение любого типа на кузове')) {
                $badSearch = 0;
                Log::info('$badSearch ' . $badSearch);

                while ($i < count($answers) && str_contains($answers[$i]['q'],
                                                            'Сфотографируйте повреждение любого типа на кузове')) {
                    Log::info($i);
                    Log::info($answers[$i]);
                    $fields['badParts'][] = ['photo' => $answers[$i++]['a'], 'text' => $answers[$i++]['a'],];
                }
                $i--;
            }

            //Отсмотрите соединения дверей и капота на предмет скручивания и наличия ржавчины
            if ($badSearch2 == 1 && str_contains($answers[$i]['q'], 'Сфотографируйте эти места')) {
                $badSearch2 = 0;
                Log::info('$badSearch2 ' . $badSearch2);

                while ($i < count($answers) && str_contains($answers[$i]['q'],
                                                            'Сфотографируйте эти места')) {
                    $fields['badPartsOut'][] = ['photo' => $answers[$i++]['a'], 'text' => $answers[$i++]['a'],];

                    $i++;
                }
                $i -= 2;

            }


            if ($badSearchDirty && str_contains($answers[$i]['q'],
                                                'Сфотографируйте повреждение или испачканные элементы')) {
                $badSearchDirty = 0;
                Log::info('$badSearchDirty ' . $badSearchDirty);

                while ($i < count($answers) && str_contains($answers[$i]['q'],
                                                            'Сфотографируйте повреждение любого типа на кузове')) {
                    $fields['badPartsDirty'][] = ['photo' => $answers[$i++]['a'], 'text' => $answers[$i++]['a'],];

                    $i++;
                }
                $i -= 2;

            }
        }

        $date = date_create();

        $fields['pseudoId'] = Hash::make($fields['brand'] . $fields['model'] . date_format($date,
                                                                                           'Y-m-d H:i:s'));

//
//        // sorting equipment
//        uasort($fields,  function ($a, $b) {
//
//            if ($a == $b) {
//                return 0;
//            }
//            return (array_search($a, $this->sortEquipment) < array_search($b,
//                                                                          $this->sortEquipment)) ? -1 : 1;
//        });

        Log::info($fields);
        $res = Invoice::create($fields);

        Log::info($res);
    }

    function getByAns($q, $answers) {

        $item = current(array_filter($answers, function ($element) use ($q) {
            return ($element['q'] == $q);
        }));

        return ($item ? $item['a'] : null);
    }


}
