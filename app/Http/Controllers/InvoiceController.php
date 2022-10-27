<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class InvoiceController extends Controller
{
    public function create(Request $request) {
        $answers = $request->input('answers');
        $fields['brand'] = $this->getByAns('Выберите марку осматриваемого авто', $answers);
        $fields['model'] = $this->getByAns('Напишите модель', $answers);
        $fields['clearVIN'] = $this->getByAns('Проверьте вин-код автомобиля на наличие ДТП по базам', $answers);
        $fields['year'] = $this->getByAns('Укажите год выпуска', $answers);
        $fields['capacity'] = $this->getByAns('Уточните у продавца точный объем двигателя и л.с. Сперва укажите объем ⬇', $answers);
        $fields['power'] = $this->getByAns('Лошадиные силы', $answers);
        $fields['gearbox'] = $this->getByAns('Какая КПП у авто?', $answers);
        $fields['color'] = $this->getByAns('Какой цвет кузова авто?', $answers);
        $fields['VIN'] = $this->getByAns('Укажите VIN код', $answers);
        $fields['mileage'] = $this->getByAns('Укажите точный пробег', $answers);
        $fields['drive'] = $this->getByAns('Какой привод у авто?', $answers);
        $fields['specification'] = $this->getByAns('Укажите спецификацию', $answers);
        $fields['guarantee'] = $this->getByAns('Спросите у продавца - есть ли гарантия?', $answers);
        $fields['guaranteeYear'] = $this->getByAns('До какого месяца и года?',
                                                $answers);
        $fields['smells'] = $this->getByAns('Присутствуют ли в салоне неприятные запахи?', $answers);
        $fields['tiresYear'] = $this->getByAns('Проверьте и укажите год резины', $answers);
        $fields['tiresStatus'] = $this->getByAns('Какое состояние резины', $answers);
        $fields['photosVIN'] = $this->getByAns('Сфотографируйте шильдик с вин-номером и информацией об авто в проёме водительской двери, либо просто снизу лобового стекла', $answers);
        $fields['photosDocks'] = $this->getByAns('Сфотографируйте мулькию(птс авто) и какие-либо документы на авто', $answers);
        $fields['photosGeneralOut'] = $this->getByAns('Обязательно сделайте качественные и четкие фото с хорошим освещением', $answers);
        $fields['photosGeneralIn'] = $this->getByAns('Теперь сделайте фото общих планов салона', $answers);
        $fields['photosBadParts'] = $this->getByAns('Сфотографируйте эти места', $answers);
        $fields['badPartsText'] = $this->getByAns('Дайте описание загруженным фотографиям соединений', $answers);
        $fields['badParts'] = $this->getByAns('Отсмотрите соединения дверей и капота на предмет скручивания и наличия ржавчины', $answers);
        $fields['photosDirtyParts'] = $this->getByAns('еперь осмотрите салон и сфотографируйте повреждения или испачканные элементы', $answers);
        $fields['textDirtyParts'] = $this->getByAns('Дайте описание загруженным фото салона', $answers);
        $fields['price'] = $this->getByAns('Укажите последнюю цену авто', $answers);
        $fields['equipment'] = $this->getByAns('Укажите комплектацию авто', $answers);
        $fields['equipmentStatus'] = $this->getByAns('Проверьте как работают все функции авто', $answers);
        $fields['allDefects'] = $this->getByAns('Напишите про все недочеты', $answers);
        $fields['last'] = $this->getByAns('Последний шаг!', $answers);


        $fields['paintedParts']=[];
        $fields['badPartsOut']=[];
        for ($i = 0; $i < count($answers); $i++){
            $paintSearch = 1;
            $badSearch = 1;
            if($paintSearch && str_contains($answers[$i]['q'], 'На какой из деталей распознан вторичный окрас?')){
                $paintSearch = 0;
                while($answers[$i]['a'] != 'Больше нет 👍'){
                    $fields['paintedParts'][] = [
                        'part' => $answers[$i++]['a'],
                        'rating' => $answers[$i++]['a'],
                    ];
                }
            }
            if($badSearch && str_contains($answers[$i]['q'], 'Сфотографируйте повреждение любого типа на кузове')){
                $badSearch = 0;
                while(str_contains($answers[$i]['q'], 'Сфотографируйте повреждение любого типа на кузове')){
                    $fields['badPartsOut'][] = [
                        'photo' => $answers[$i++]['a'],
                        'text' => $answers[$i++]['a'],
                    ];
                }
            }
        }
        Log::info($fields);
    }

    function getByAns($q, $answers) {

        $item = current(array_filter($answers, function ($element) use ($q) {
            return ($element['q'] == $q);
        }));

        return ($item ? $item['a'] : null);
    }
}
