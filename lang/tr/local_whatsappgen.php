<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *  WhatsApp Message Generator
 *
 * @package    loca_whatsappgen
 * @copyright  2024 Stephan Waetzig
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$string['pluginname'] = 'WhatsApp Oluşturucu';
//$string['defaultapp'] = 'Varsayılan olarak WhatsApp Masaüstü Uygulamasını kullan';
//$string['defaultappdescription'] = 'Eğer işaretliyse, varsayılan WhatsApp Masaüstü uygulamasıdır. İşaretli değilse, varsayılan WhatsApp Web\'dir';
$string['addwhatsapp'] = 'WhatsApp Mesajı Ekle';
$string['error'] = 'WhatsApp oluşturucusunda ölümcül hata. Lütfen yönetici/destek ile iletişime geçin';
$string['whatsapp_messagetext'] = 'Mesajınızın metni';
$string['whatsapp_messagetext_buttons'] = 'Oluştur';
$string['create_message'] = 'Yeni bir mesaj oluştur';
$string['messagetext'] = 'WhatsApp Mesajınız';
$string['limituser'] = 'Aynı anda oluşturulabilecek maksimum mesaj sayısı';
$string['limituserdescription'] = 'Lütfen aynı anda oluşturulabilecek maksimum mesaj sayısını seçin. 10 öneriyoruz. Daha fazlası bilgisayarınızın performansını etkileyebilir';
$string['defaultnumber'] = 'Varsayılan WhatsApp Numarası';
$string['defaultnumberdescription'] = 'Kullanıcı profilindeki varsayılan WhatsApp numarası alanını seçin.';
$string['defaultdbtracking'] = 'Veritabanı bildirim tablosunda izleme';
$string['defaultdbtrackingdescription'] = 'İsteğe bağlı olarak, oluşturulan mesajları bildirimler tablosunda izlemeyi seçin.';
$string['defaultroles'] = 'İzin Verilen Roller';
$string['defaultrolesdescription'] = 'Eklentiyi kullanma iznine sahip roller. Lütfen bu rollerin iletişim numaralarını görebileceğini unutmayın.';
$string['limittext'] = 'Seçilen kullanıcıların sayısı sınırı aşıyor ';
$string['labelselect'] = 'Mesaj, yeşil renkle işaretlenmiş katılımcılar için oluşturulacaktır.';
$string['cancelmessage'] = 'Bu katılımcılar için mesaj yok';
$string['nonumber'] = 'Mevcut numara yok';
$string['placeholders'] = 'Yer Tutuculara Genel Bakış';
$string['phfirstname'] = '%%firstname%% &rarr; katılımcının adı';
$string['phlastname'] = '%%lastname%% &rarr; katılımcının soyadı';
$string['phemail'] = '%%email%% &rarr; katılımcının e-posta adresi';
$string['phgroups'] = '%%groupname%% &rarr; katılımcının kayıtlı olduğu bu kurstaki tüm gruplar';
$string['phfullname'] = '%%fullname%% &rarr; bu kursun tam adı';
$string['phshortname'] = '%%shortname%% &rarr; bu kursun kısa adı';
$string['textformatting'] = 'Metin Biçimlendirme Genel Bakışı';
$string['tfbolt'] = '*Metin* &rarr; kalın: ';
$string['tfitalic'] = '_Metin_ &rarr; italik: ';
$string['tfstrikethrough'] = '~Metin~ &rarr; üstü çizili: ';
$string['tfmonospace'] = '```Metin``` &rarr; tek aralıklı biçim: ';
$string['licenceinfo'] = 'Şartlar';
$string['licenceinfodescription'] = 'Bu eklentinin yazarının herhangi bir yasal ihlalden sorumlu olmadığını anlıyorum. Lütfen WhatsApp lisans şartlarına uyun.<br>Lütfen <a href="https://www.whatsapp.com/legal" target="_blank">WhatsApp\'ın yasal şartlarını</a> kontrol edin';
