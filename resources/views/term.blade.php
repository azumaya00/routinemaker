@extends('layouts.app')

@section('title','利用規約')

@section('content')
    <header-component
        v-bind:authcheck="@auth true @endauth @guest false @endguest"
        v-bind:logout="'{{route('logout')}}'"
        v-bind:user="{{$user}}"></header-component>

    <main class="l-main l-main--base">
        <div class="p-policy__container">
            <h2 class="p-policy__title">利用規約</h2>

            <p class="p-policy__text">この利用規約（以下、「本規約」といいます。）は、Yuruknowledge
                Labo（以下、「当サイト」といいます。）がこのウェブサイト上で提供するサービス（以下、「本サービス」といいます。）の利用条件を定めるものです。登録ユーザーの皆さま（以下、「ユーザー」といいます。）には、本規約に従って、本サービスをご利用いただきます。</p>

            <h3 class="p-policy__title--sub">第1条（適用）</h3>
            <ol class="p-policy__list">
                <li class="p-policy__list__item">
                    本規約は、ユーザーと当サイトとの間の本サービスの利用に関わる一切の関係に適用されるものとします。
                </li>
                <li class="p-policy__list__item">
                    当サイトは本サービスに関し、本規約のほか、ご利用にあたってのルール等、各種の定め（以下、「個別規定」といいます。）をすることがあります。これら個別規定はその名称のいかんに関わらず、本規約の一部を構成するものとします。
                </li>
                <li class="p-policy__list__item">
                    本規約の規定が前条の個別規定の規定と矛盾する場合には、個別規定において特段の定めなき限り、個別規定の規定が優先されるものとします。
                </li>
            </ol>


            <h3 class="p-policy__title--sub">第2条（利用登録）</h3>
            <ol class="p-policy__list">
                <li class="p-policy__list__item">
                    本サービスにおいては、登録希望者が本規約に同意の上、当サイトの定める方法によって利用登録を申請し、当サイトがこれを承認することによって、利用登録が完了するものとします。
                </li>
                <li class="p-policy__list__item">
                    当サイトは、利用登録の申請者に以下の事由があると判断した場合、利用登録の申請を承認しないことがあり、その理由については一切の開示義務を負わないものとします。
                </li>
                <ol class="p-policy__list">
                    <li class="p-policy__list__item">利用登録の申請に際して虚偽の事項を届け出た場合
                    </li>
                    <li class="p-policy__list__item">本規約に違反したことがある者からの申請である場合
                    </li>
                    <li class="p-policy__list__item">その他、当サイトが利用登録を相当でないと判断した場合
                    </li>
                </ol>
                </li>
            </ol>

            <h3 class="p-policy__title--sub">第3条（Eメールアドレスおよびパスワードの管理）</h3>
            <ol class="p-policy__list">
                <li class="p-policy__list__item">ユーザーは、自己の責任において、本サービスのEメールアドレスおよびパスワードを適切に管理するものとします。</li>
                <li class="p-policy__list__item">ユーザーは、いかなる場合にも、Eメールアドレスおよびパスワードを第三者に譲渡または貸与し、もしくは第三者と共用することはできません。当サイトは、Eメールアドレスとパスワードの組み合わせが登録情報と一致してログインされた場合には、そのEメールアドレスを登録しているユーザー自身による利用とみなします。</li>
                <li class="p-policy__list__item">Eメールアドレス及びパスワードが第三者によって使用されたことによって生じた損害は、当サイトに故意又は重大な過失がある場合を除き、当サイトは一切の責任を負わないものとします。</li>
            </ol>

            <h3 class="p-policy__title--sub">第4条（禁止事項）</h3>
            <p class="p-policy__text">ユーザーは、本サービスの利用にあたり、以下の行為をしてはなりません。
            </p>
            <ol class="p-policy__list">
                <li class="p-policy__list__item">法令または公序良俗に違反する行為</li>
                <li class="p-policy__list__item">犯罪行為に関連する行為</li>
                <li class="p-policy__list__item">本サービスの内容等、本サービスに含まれる著作権、商標権ほか知的財産権を侵害する行為</li>
                <li class="p-policy__list__item">本サービスによって得られた情報を商業的に利用する行為</li>
                <li class="p-policy__list__item">当サイトのサービスの運営を妨害するおそれのある行為</li>
                <li class="p-policy__list__item">不正アクセスをし、またはこれを試みる行為</li>
                <li class="p-policy__list__item">他のユーザーに関する個人情報等を収集または蓄積する行為</li>
                <li class="p-policy__list__item">不正な目的を持って本サービスを利用する行為</li>
                <li class="p-policy__list__item">本サービスの他のユーザーまたはその他の第三者に不利益、損害、不快感を与える行為</li>
                <li class="p-policy__list__item">他のユーザーに成りすます行為</li>
                <li class="p-policy__list__item">当サイトが許諾しない本サービス上での宣伝、広告、勧誘、または営業行為</li>
                <li class="p-policy__list__item">当サイトのサービスに関連して、反社会的勢力に対して直接または間接に利益を供与する行為</li>
                <li class="p-policy__list__item">その他、当サイトが不適切と判断する行為</li>
            </ol>

            <h3 class="p-policy__title--sub">第5条（本サービスの提供の停止等）</h3>
            <ol class="p-policy__list">
                <li class="p-policy__list__item">当サイトは、以下のいずれかの事由があると判断した場合、ユーザーに事前に通知することなく本サービスの全部または一部の提供を停止または中断することができるものとします。
                <ol class="p-policy__list">
                    <li class="p-policy__list__item">本サービスにかかるコンピュータシステムの保守点検または更新を行う場合</li>
                    <li class="p-policy__list__item">地震、落雷、火災、停電または天災などの不可抗力により、本サービスの提供が困難となった場合</li>
                    <li class="p-policy__list__item">コンピュータまたは通信回線等が事故により停止した場合</li>
                    <li class="p-policy__list__item">その他、当サイトが本サービスの提供が困難と判断した場合</li>
                </ol>
                </li>
                <li class="p-policy__list__item">当サイトは、本サービスの提供の停止または中断により、ユーザーまたは第三者が被ったいかなる不利益または損害についても、一切の責任を負わないものとします。</li>
            </ol>

            <h3 class="p-policy__title--sub">第6条（利用制限および登録抹消）</h3>
            <p class="p-policy__text">
            </p>
            <ol class="p-policy__list">
                <li class="p-policy__list__item">当サイトは、ユーザーが以下のいずれかに該当する場合には、事前の通知なく、ユーザーに対して、本サービスの全部もしくは一部の利用を制限し、またはユーザーとしての登録を抹消することができるものとします。
                <ol class="p-policy__list">
                    <li class="p-policy__list__item">本規約のいずれかの条項に違反した場合</li>
                    <li class="p-policy__list__item">登録事項に虚偽の事実があることが判明した場合</li>
                    <li class="p-policy__list__item">料金等の支払債務の不履行があった場合</li>
                    <li class="p-policy__list__item">当サイトからの連絡に対し、一定期間返答がない場合</li>
                    <li class="p-policy__list__item">本サービスについて、最終の利用から一定期間利用がない場合</li>
                    <li class="p-policy__list__item">その他、当サイトが本サービスの利用を適当でないと判断した場合</li>
                </ol>
                </li>
                <li class="p-policy__list__item">当サイトは、本条に基づき当サイトが行った行為によりユーザーに生じた損害について、一切の責任を負いません。</li>
            </ol>

            <h3 class="p-policy__title--sub">第7条（退会）</h3>
            <p class="p-policy__text">
                ユーザーは、当サイトの定める退会手続により、本サービスから退会できるものとします。
            </p>

            <h3 class="p-policy__title--sub">第8条（保証の否認および免責事項）</h3>
            <ol class="p-policy__list">
                <li class="p-policy__list__item">当サイトは、本サービスに事実上または法律上の瑕疵（安全性、信頼性、正確性、完全性、有効性、特定の目的への適合性、セキュリティなどに関する欠陥、エラーやバグ、権利侵害などを含みます。）がないことを明示的にも黙示的にも保証しておりません。</li>
                <li class="p-policy__list__item">当サイトは、本サービスに起因してユーザーに生じたあらゆる損害について一切の責任を負いません。ただし、本サービスに関する当サイトとユーザーとの間の契約（本規約を含みます。）が消費者契約法に定める消費者契約となる場合、この免責規定は適用されません。</li>
                <li class="p-policy__list__item">前項ただし書に定める場合であっても、当サイトは、当サイトの過失（重過失を除きます。）による債務不履行または不法行為によりユーザーに生じた損害のうち特別な事情から生じた損害（当サイトまたはユーザーが損害発生につき予見し、または予見し得た場合を含みます。）について一切の責任を負いません。また、当サイトの過失（重過失を除きます。）による債務不履行または不法行為によりユーザーに生じた損害の賠償は、ユーザーから当該損害が発生した月に受領した利用料の額を上限とします。</li>
                <li class="p-policy__list__item">当サイトは、本サービスに関して、ユーザーと他のユーザーまたは第三者との間において生じた取引、連絡または紛争等について一切責任を負いません。</li>
            </ol>

            <h3 class="p-policy__title--sub">第9条（サービス内容の変更等）</h3>
            <p class="p-policy__text">
                当サイトは、ユーザーに通知することなく、本サービスの内容を変更しまたは本サービスの提供を中止することができるものとし、これによってユーザーに生じた損害について一切の責任を負いません。
            </p>

            <h3 class="p-policy__title--sub">第10条（利用規約の変更）</h3>
            <p class="p-policy__text">
                当サイトは、必要と判断した場合には、ユーザーに通知することなくいつでも本規約を変更することができるものとします。なお、本規約の変更後、本サービスの利用を開始した場合には、当該ユーザーは変更後の規約に同意したものとみなします。
            </p>

            <h3 class="p-policy__title--sub">第11条（個人情報の取扱い）</h3>
            <p class="p-policy__text">
                当サイトは、本サービスの利用によって取得する個人情報については、当サイト「プライバシーポリシー」に従い適切に取り扱うものとします。
            </p>

            <h3 class="p-policy__title--sub">第12条（通知または連絡）</h3>
            <p class="p-policy__text">
                ユーザーと当サイトとの間の通知または連絡は、当サイトの定める方法によって行うものとします。当サイトは、ユーザーから、当サイトが別途定める方式に従った変更届け出がない限り、現在登録されている連絡先が有効なものとみなして当該連絡先へ通知または連絡を行い、これらは、発信時にユーザーへ到達したものとみなします。
            </p>

            <h3 class="p-policy__title--sub">第13条（権利義務の譲渡の禁止）</h3>
            <p class="p-policy__text">
                ユーザーは、当サイトの書面による事前の承諾なく、利用契約上の地位または本規約に基づく権利もしくは義務を第三者に譲渡し、または担保に供することはできません。
            </p>

            <h3 class="p-policy__title--sub">第15条（準拠法・裁判管轄）</h3>
            <ol class="p-policy__list">
                <li class="p-policy__list__item">本規約の解釈にあたっては、日本法を準拠法とします。
                </li>
                <li class="p-policy__list__item">本サービスに関して紛争が生じた場合には、当サイト管理人の所在地を管轄する裁判所を専属的合意管轄とします。</li>
            </ol>

            <p class="p-policy__text p-policy__text--right">以上</p>

        </div>
    </main>

    <footer-component></footer-component>
@endsection
