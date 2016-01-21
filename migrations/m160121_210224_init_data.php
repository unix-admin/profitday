<?php

use yii\db\Schema;
use yii\db\Migration;

class m160121_210224_init_data extends Migration
{
    public function up()
    {


        $this->batchInsert('content',['title_uk','content_uk','type','status'],[
            ['День кар`єри «PROFITDAY»','  <div class="row">
                    <!--<div class="col-md-12">-->
                        <div class="col-md-8 col-md-offset-2">
                            <h3 class="mainName">День кар’єри «PROFITDAY»</h3>
                            <div class="col-md-1 col-sm-1 col-xs-1 orange-line"></div>
                            <hr class="col-md-10" style="margin-top: 2px;">
                        </div>
                    <!--</div>-->
                </div>
                <div class="row">
                    <!--<div class="col-md-12">-->
                        <div class="col-md-8 col-md-offset-2">
                            <p class="index-text">призначений для тих, хто шукає можливості працевлаштування чи бажає визначитись із майбутньою роботою в сфері інформаційних технологій.
                            Компанії тут мають нагоду знайти собі фахівців.
                            Навчальні заклади, які готують спеціалістів - презентувати себе та запросити потенційних абітурієнтів.
                            Молоді люди – більше дізнатися про професії або навіть зробити спробу працевлаштування.
                            Під час<span style="color: #f07c00"> «PROFIТDAY» </span>представники передових компаній влаштовують презентації, проводять семінари, тренінги, майстер-класи, та приймають резюме від кандидатів.
                            Освітні заклади знайомлять з умовами вступу та навчання, перспективами напрямків, за якими вони готують фахівців, а також здійснюватимуть попередній відбір анкет потенційних студентів.</p><br>
                            <ul type="square" style="color: #f07c00;">
                                <li><span class="index-text">Якщо ти працюєш за невелику зарплатню, але хочеш працювати в гідній компанії, розвиватись і заробляти більше.</span></li>
                                <li><span class="index-text">Якщо ти студент, чи школяр, який робить свої перші кроки до пошуку роботи чи просто цікавишся працевлаштуванням в ІТ-сфері, то</span><span class="index-text" style="color: #f07c00"> «PROFIТDAY» </span><span class="index-text">саме для тебе.</span></li>
                            </ul>
                            <span class="index-text">Приходь та отримай можливість дізнатись, що потрібно вміти і знати, та які перспективи чекають тих, хто пов’яже себе із сучасними професіями.</span>
                        </div>
                    <!--</div>-->
                </div>','index','1' ],
            ['День кар`єри «PROFITDAY»','<div class="row">
        <div class="col-lg-offset-3 col-lg-7 " id="aboutCompany_careerDay">
            <h2>День кар\'єри &laquo;PROFI DAY&raquo;</h2>
            <hr class="aboutCompany_hr-normal">
            <hr class="aboutCompany_hr-yellow">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-offset-3 col-lg-7 " id="aboutCompany_mainContent">
            <p>
                організується з метою пошуку працівників компаніями, рекламування навчальних закладів і курсів, які     <br>
                готують спеціалістів та для популяризації IT сфери і IT професій (тестувальник, програміст, системній   <br>
                адміністратор та інші) серед молоді.                                                                    <br>
                Даний захід представляє собою-поєднання дня кар\'єри і ярмарки вакансій для спеціалістів, виставку       <br>
                навчальних закладів, які готують спеціалістів для ринку праці та презентації компаній (їх напрямки      <br>
                діяльності та технології з якими вони працюють, умови роботи, партнери, замовники, корпоративні         <br>
                особливості, плани на майбутнє тощо)
            </p>
            <h2 class="aboutCompany_contentH2">В програмі</h2>
            <p>
                передові компанії проводитимуть презентациї, прийматимуть CV від кандидатів, проводитимуть семінари,    <br>
                тренінги та майстер-класи.                                                                              <br>
                Навчальні заклади також презентуватимуть умови прийому та навчання, перспективи напрямків за якими      <br>
                вони готують.
            </p>
            <h2 class="aboutCompany_contentH2">Для вас</h2>
            <span>презентація своєї компанії та кар\'єрних можливостей для молодих спеціалістів;</span>
            <ul id="aboutCompany_ul">
                <li class="aboutCompany_li"><span>підбір талановитих та кар\'єрних можливостей для молодих свеціалістів;</span></li>
                <li class="aboutCompany_li"><span>налагодження нових бізнес-контаків із потенціальними парнтерами та клієнтами;</span></li>
                <li class="aboutCompany_li"><span>розповсюдження власних рекламних матеріалів;</span></li>
                <li class="aboutCompany_li"><span>реклама компанії в рамках потужної промо-компанії проекту по Україні;</span></li>
                <li class="aboutCompany_li"><span>набір кадрового резерву на сезонні періоди та тимчасові роботи;</span></li>
                <li class="aboutCompany_li"><span>покращення іміджу компанії серед молоді;</span></li>
            </ul>
            На <span id="aboutCompany_PDOrange">&laquo;PROFIDAY&raquo;</span> запрошені молоді люди, які шукають чи хочуть змінити
            роботу, студенти та школярі.
        </div>
    </div>

    <div class="row">
        <div class=" col-lg-offset-4 col-lg-7" id="aboutCompany_motoWord">
            Участь у проекті надасть можливість створити позитивний імідж соціально-відповідальної <br>
            компанії яка підтримує молодь, а також внутрішньо переміщених осіб
        </div>
    </div>','company','1']

        ]);

        $this->batchInsert('city',['title_uk','title_ru','title_en'],[
            ['Вінниця','Винница','Vinnytsia'],
            ['Дніпропетровськ','Днепропетровск','Dnipropetrovsk'],
            ['Донецьк','Донецк','Donetsk'],
            ['Житомир','Житомир','Zhytomyr'],
            ['Запоріжжя','Запорожье','Zaporizhia'],
            ['Івано-Франківськ','Ивано-франковск','Ivano-Frankivsk'],
            ['Київ','Киев','Kiev'],
            ['Кіровоград','Кировоград','Kirovohrad'],
            ['Луганськ','Луганск','Luhansk'],
            ['Луцьк','Луцк','Lutsk'],
            ['Львів','Львов','Lviv'],
            ['Миколаїв','Николаев','Mykolaiv'],
            ['Одеса','Одесса','Odessa'],
            ['Полтава','Полтава','Poltava'],
            ['Рівне','Ровно','Rivne'],
            ['Суми','Сумы','Sumy'],
            ['Тернопіль','Тернополь','Ternopil'],
            ['Ужгород','Ужгород','Uzhhorod'],
            ['Харків','Харьков','Kharkiv'],
            ['Херсон','Херсон','Kherson'],
            ['Хмельницький','Хмельницкий','Khmelnytskyi'],
            ['Черкаси','Черкассы','Cherkasy'],
            ['Чернівці','Черновцы','Chernivtsi'],
            ['Чернігів','Чернигов','Chernihiv'],
        ]);

        $this->batchInsert('company',['name','contact_person','site','is_organisator', 'is_sponsor','order','logo_url','intro_uk'],[
            ['Вінницька ІТ-Академія','Роман','http://www.ita.in.ua','1','1','1','/files/logo/ita.gif','За підтримки Міністерства молоді та спорту України, http://dsmsu.gov.ua'],
            ['ІТ Академія ІНТІТА','Роман','http://www.intita.com','1','1','2','/files/logo/intita.png','ВМГО «Молодіжний центр працевлаштування», http://www.robotamolodi.org'],
            ['Win Interactive LLC','Вася','http://www.win-interactive.com','0','1','1','/files/logo/win-interactive.gif','ВМГО «Молодіжний центр працевлаштування», http://www.robotamolodi.org'],
        ]);
    }

    public function down()
    {
        echo "m160121_210224_init_data cannot be reverted.\n";

    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
