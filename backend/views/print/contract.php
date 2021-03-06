<div id="entity-contract">
    <div class="h2">ДОГОВОР ПОСТАВКИ № <?php echo date('d/m-Y',strtotime($order->date))?></div>

    <table>
        <tr>
            <td style="width: 500px;font-size:12px"> г. Санкт-Петербург</td>
            <td style="width: 200px;font-size:12px;text-align: right">«<?php echo date('d',strtotime($order->date))?>» <?php echo SHtml::russian_month(date('m',strtotime($order->date))).' '.date('Y',strtotime($order->date)).' г.'?></td>
        </tr>
    </table>

    <br/>
    <p>
        Индивидуальный предприниматель Коптелов Алексей Владленович, далее «Поставщик», в лице генерального директора
        Коптелова Алексея Владленовича, действующего на основании Свидетельства №003757774, с одной стороны, и <?php echo $entity->name?>, именуемое в дальнейшем Покупатель, в лице <?php echo $entity->director?>, с другой стороны, заключили настоящий договор о нижеследующем:
    </p>

    <div class="h2">1. ПРЕДМЕТ ДОГОВОРА</div>

    <p>
        1.1. В соответствии с настоящим договором между Поставщиком и Покупателем устанавливаются прямые длительные
        хозяйственные отношения по поставкам товаров, на период с «<?php echo date('d',strtotime($order->date))?>» <?php echo SHtml::russian_month(date('m',strtotime($order->date))).' '.date('Y',strtotime($order->date))?> г. по 31 декабря <?= date('Y')?> г.
        <br/>
        1.2. Поставщик обязуется поставлять Покупателю, а Покупатель принимать и оплачивать товары на условиях
        настоящего договора.
    </p>

    <div class="h2">2. КАЧЕСТВО, КОМПЛЕКТНОСТЬ И УПАКОВКА ТОВАРА</div>

    <p>
        2.1. Качество и комплектность поставляемых товаров должны соответствовать стандартам, техническим условиям и др.
        документам.
        <br/>
        2.2. Согласование сторонами уточненных технических характеристик и дополнительных требований к качеству и
        комплектности, не предусмотренных утвержденной технической документацией, производится в письменной форме.
        Поставщик обязуется поставлять товар в комплекте с относящейся к нему документацией (сертификаты соответствия,
        сертификаты качества, гигиенические сертификаты, инструкции по эксплуатации) на русском языке.
        <br/>
        2.3. Поставщик гарантирует качество и надежность поставляемого товара в течение гарантийного срока,
        установленного производителем товара.
        <br/>
        2.4. Товар должен иметь индивидуальную тару и упаковку, позволяющую сохранять его качества при транспортировке и
        хранении.
        2.5. Приемка товара по количеству и качеству от органа транспорта (перевозчика) осуществляется в порядке,
        установленном действующим законодательством.
        <br/>
        2.6. При обнаружении производственных дефектов, либо недостачи поставленного товара при его приемке, вызов
        уполномоченного представителя Поставщика для составления двухстороннего Акта обязателен. Срок устранения
        недостатков, замены товара (доукомплектования), а также поставки недостающего товара устанавливается в 45 дней.
    </p>

    <div class="h2">3. СРОКИ И ПОРЯДОК ПОСТАВКИ ТОВАРА</div>

    <p>
        3.1. Поставщик считается исполнившим свои обязательства по поставке товара с даты передачи товара Покупателю.
        <br/>
        3.2. Основанием для отгрузки товара является Заказ Покупателя, подтвержденный Поставщиком.
        <br/>
        3.3. Проект Заказ составляется Покупателем и направляется Поставщику в электронном виде и в письменной форме не
        позднее, чем за 10 рабочих дней до предполагаемого начала поставки.
        Заказ должен содержать следующие реквизиты: порядковый номер и дату составления, наименование Поставщика и
        Покупателя, код, наименование, артикул и количество товара, а также предполагаемый срок поставки.
        <br/>
        3.4. Поставщик обязан в течение 3 рабочих дней с момента получения Заказа рассмотреть проект и направить
        Покупателю по электронной почте согласованный Заказ с указанием кодов, артикулов и количества товара. Поставщик
        имеет право вносить изменения в ассортимент и сроки поставки, предварительно согласовав их с Покупателем по
        электронной почте.
        <br/>
        3.5. Право собственности и все риски на товар переходят от Поставщика Покупателю в момент получения товара
        Покупателем
    </p>

    <div class="h2">4. ЦЕНА И ПОРЯДОК РАСЧЕТОВ ЗА ТОВАР</div>

    <p>
        4.1.  Покупатель оплачивает поставленные Поставщиком товары по ценам , указанным в Приложении №1 к настоящему договору.
        <br/>
        4.2. Покупатель оплачивает товар путем перечисления денежных средств на расчетный счет Поставщика платежными
        поручениями.
        <br/>
        4.3. Поставщик предоставляет Покупателю товар после поступления денег на расчетный счет Поставщика (предоплата)
        Форма оплаты: перечисление стоимости товара на расчетный счет Продавца.
        <br/>
        4.4. Обязательство по оплате товара считается исполненным Покупателем с даты зачисления денежных средств на
        расчетный счет Поставщика.
    </p>
    <div class="h2">5. ОТВЕТСТВЕННОСТЬ СТОРОН</div>

    <p>
        5.1. За неисполнение или ненадлежащее исполнение обязанностей по настоящему договору стороны несут
        ответственность, предусмотренную гражданским законодательством.
        <br/>
        5.2. В случае поставки некачественного или некомплектного товара Поставщик заменяет некачественный или
        некомплектный товар на качественный или комплектный.
    </p>

    <div class="h2">6. ЗАКЛЮЧИТЕЛЬНЫЕ ПОЛОЖЕНИЯ</div>

    <p>
        6.1. Изменение условий договора, его расторжение и прекращение возможны только по соглашению сторон.
        По требованию одной стороны договор может быть изменен или расторгнут по решению арбитражного суда в случаях
        нарушения одной стороной условий договора.
        <br/>
        6.2. Споры, возникающие при заключении и исполнении настоящего договора, рассматриваются Арбитражным судом г.
        Санкт-Петербурга, в соответствии с действующим законодательством.
        <br/>
        6.3. Взаимоотношения сторон, не урегулированные настоящим договором, регламентируются действующим
        законодательством.
        <br/>
        6.4. Настоящий договор вступает в силу с даты подписания договора и действует до 31.12.<?= date('Y')?> г. Если ни одна из
        Сторон не заявит о расторжении договора не менее чем за один месяц до истечения срока его действия, то срок
        действия договора продлевается на следующий годичный срок. Количество пролонгации не ограничивается.
        <br/>
        6.5. Стороны обязаны информировать друг друга об изменении адресов и реквизитов, указанных в договоре. Сообщение
        Покупателя об изменении его отгрузочных реквизитов принимается к исполнению Поставщиком для отгрузки товаров в
        установленный договором срок, если такое сообщение поступит к Поставщику не позднее 10 дней до начала срока
        поставки.
    </p>

    <div class="h2">АДРЕСА И ПЛАТЕЖНЫЕ РЕКВИЗИТЫ СТОРОН:</div>
    <br/>
    <table style="font-size: 12px;border-collapse:collapse" border="1">
        <tr>
            <td style="font-weight: bold;text-align: center; width: 98mm">
                ПОСТАВЩИК<br/>
                ИП Коптелов Алексей Владленович
            </td>
            <td style="font-weight: bold;text-align: center">
                ПОКУПАТЕЛЬ<br/>
                <?php echo $entity->name?>
            </td>
        </tr>
        <tr>
            <td style="padding: 5px">
                ИНН 424623808213<br/>
                ОКПО 0189972297, ОГРНИП 313424629000016<br/>
                ОКАТО 32246820001<br/>
                р/с 40802810902100009816 в ОАО АКБ "Авангард"<br/>
                г. Санкт-Петербург<br/>
                к/с 30101810000000000201, БИК 044525201
            </td>
            <td style="padding: 5px">
                ИНН <?php echo $entity->inn?> / КПП <?php echo $entity->kpp?><br/>
                ОГРН <?php echo $entity->ogrn?><br/>
                р/с <?php echo $entity->rs?> в <?php echo $entity->bank?><br/>
                 <?= strpos($entity->ks, 'л/с') !== false ? '' : 'к/с'?> <?php echo $entity->ks?>, БИК <?php echo $entity->bik?>
            </td>
        </tr>
        <tr>
            <td style="padding: 5px">
                <br/>
                <br/>
                <br/>
                <br/>
                                            ___________ / Коптелов А.В./
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                       М.П.
            </td>
            <td style="padding: 5px">
                <br/>
                <br/>
                <br/>
                <br/>
                                            ___________ / <?php echo $entity->director_short?>/
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                       М.П.
            </td>
        </tr>
    </table>
</div>


<div style="page-break-after:always;"></div>

<div id="entity-contract">
    <div class="h2">Приложение №1 к договору поставки № <?php echo date('d/m-Y',strtotime($order->date))?></div>
    <br/>
    <br/>
    <div class="h2">1. Перечень поставляемых наименований</div>
    <br/>
    <table class="gtable bordered" id="products">
        <thead>
        <tr style="text-align: center">
            <td width="50">№</td>
            <td width="450">Наименование</td>
            <td width="200">Каталожный номер</td>
            <td width="200">Кол-во</td>
            <td width="200">Цена</td>
            <td width="250">Сумма</td>
        </tr>
        </thead>
        <?php
        $productTotalPrice = 0;
        $count = 0;
        ?>
        <?php foreach (OrderProducts::model()->findAllByAttributes(array('order_id'=>$order->id)) as $key => $orderProduct): ?>
            <?php
            $count += $orderProduct->count;
            $product = $orderProduct->product;
            $productTotalPrice += $orderProduct->price * $orderProduct->count;
            ?>
            <tr>
                <td style="text-align: center"><?php echo($key + 1) ?></td>
                <td style="padding-left: 10px"><?php echo $orderProduct->title ?></td>
                <td style="padding-left: 10px"><?php echo $orderProduct->product_id ?></td>
                <td style="padding-left: 10px"><?php echo $orderProduct->count ?></td>
                <td style="padding-left: 10px"><?php echo SHtml::toCashPrice($orderProduct->getPrice()) ?></td>
                <td style="padding-left: 10px"><?php echo  SHtml::toCashPrice($orderProduct->getPrice() * $orderProduct->count) ?></td>
            </tr>
        <?php endforeach ?>
        <?php if($order->shipping_price > 0):?>
            <tr>
                <td style="text-align: center"><?php echo($key + 2) ?></td>
                <td style="padding-left: 10px">Доставка</td>
                <td style="padding-left: 10px">2</td>
                <td style="padding-left: 10px">1</td>
                <td style="padding-left: 10px"><?php echo  SHtml::toCashPrice($order->shipping_price) ?></td>
                <td style="padding-left: 10px"><?php echo  SHtml::toCashPrice($order->shipping_price) ?></td>
            </tr>
        <?php endif ?>
    </table>

    <table class="gtable">
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Итого: <?= ($key + 1)  ?> наименований на сумму <?php echo  SHtml::toCashPrice($order->getTotal())  ?> руб. (<?php echo ucfirst(SHtml::num2str($order->getTotal())) ?>)</td>
        </tr>
    </table>
<?php /*
    <br/>
    <br/>
    <div class="h2">2. Полный перечень поставляемых товаров</div>
    <br/>

    <table class="gtable bordered" id="products">
        <thead>
        <tr style="text-align: center">
            <td width="450">Артикул</td>
            <td width="450">Наименование</td>
            <td width="200">Кол-во</td>
        </tr>
        </thead>
        <?php foreach ($order->getOrderProduct() as $key => $product): ?>
            <tr>
                <td style="padding-left: 10px;"><?php echo $product['article'] != '' ? $product['article'] : $product['id'] ?></td>
                <td style="padding-left: 10px;"><?php echo $product['title'] ?></td>
                <td style="padding-left: 10px;"><?php echo $product['count'] ?></td>
            </tr>
        <?php endforeach ?>
    </table> */?>

</div>