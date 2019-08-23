@extends('layouts.app')

@section('title','プライバシーポリシー')

@section('content')
    <header-component
        v-bind:authcheck="@auth true @endauth @guest false @endguest"
        v-bind:logout="'{{route('logout')}}'"
        v-bind:user="{{$user}}"></header-component>

    <main class="l-main l-main--base">
        <div class="p-policy__container">
            <h2 class="p-policy__title">プライバシーポリシー</h2>

            <p class="p-policy__text">Yuruknowledge
                Labo（以下「当サイト」といいます）は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。</p>

            <h3 class="p-policy__title--sub">個人情報とは</h3>
            <p class="p-policy__text">
                「個人情報」とは、個人情報保護法にいう「個人情報」を指すものとし、生存する個人に関する情報であって、当該情報に含まれる氏名、生年月日、住所、電話番号、連絡先その他の記述等により特定の個人を識別できる情報及び容貌、指紋、声紋にかかるデータ、及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。</p>

            <h3 class="p-policy__title--sub">個人情報の管理</h3>
            <p class="p-policy__text">
                当サイトは、ユーザーの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行います。</p>

            <h3 class="p-policy__title--sub">個人情報の利用目的</h3>
            <p class="p-policy__text">当社が個人情報を収集・利用する目的は，以下のとおりです。</p>
            <ol class="p-policy__list">
                <li class="p-policy__list__item">当サイトサービスの提供・運営のため</li>
                <li class="p-policy__list__item">
                    ユーザーからのお問い合わせに回答するため（本人確認を行うことを含む）
                </li>
                <li class="p-policy__list__item">
                    ユーザーが利用中のサービスの新機能、更新情報、キャンペーン等及び当社が提供する他のサービスの案内のメールを送付するため
                </li>
                <li class="p-policy__list__item">メンテナンス、重要なお知らせなど必要に応じたご連絡のため
                </li>
                <li class="p-policy__list__item">
                    利用規約に違反したユーザーや、不正・不当な目的でサービスを利用しようとするユーザーの特定をし、ご利用をお断りするため
                </li>
                <li class="p-policy__list__item">
                    ユーザーにご自身の登録情報の閲覧や変更、削除、ご利用状況の閲覧を行っていただくため
                </li>
                <li class="p-policy__list__item"> 有料サービスにおいて、ユーザーに利用料金を請求するため
                </li>
                <li class="p-policy__list__item">上記の利用目的に付随する目的</li>
            </ol>

            <h3 class="p-policy__title--sub">利用目的の変更</h3>
            <p class="p-policy__text">
                当サイトは、利用目的が変更前と関連性を有すると合理的に認められる場合に限り、個人情報の利用目的を変更するものとします。</p>
            <p class="p-policy__text">
                利用目的の変更を行った場合には、変更後の目的について、本ウェブサイト上に公表するものとします。</p>

            <h3 class="p-policy__title--sub">個人情報の第三者への開示・提供の禁止</h3>
            <p class="p-policy__text">
                当サイトは、ユーザーよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。</p>
            <ol class="p-policy__list">
                <li class="p-policy__list__item">ユーザーの同意がある場合</li>
                <li class="p-policy__list__item">
                    ユーザーが希望されるサービスを行なうために当サイトが業務を委託する業者に対して開示する場合
                </li>
                <li class="p-policy__list__item">法令に基づき開示することが必要である場合</li>
            </ol>

            <h3 class="p-policy__title--sub">個人情報の開示</h3>
            <p class="p-policy__text">
                当サイトは、本人から個人情報の開示を求められたときは、本人に対し、遅滞なくこれを開示します。ただし、開示することにより次のいずれかに該当する場合は、その全部または一部を開示しないこともあり、開示しない決定をした場合には、その旨を遅滞なく通知します。なお，個人情報の開示に際しては、1件あたり1,000円の手数料を申し受けます。</p>
            <ol class="p-policy__list">
                <li class="p-policy__list__item">
                    本人または第三者の生命、身体、財産その他の権利利益を害するおそれがある場合
                </li>
                <li class="p-policy__list__item">当社の業務の適正な実施に著しい支障を及ぼすおそれがある場合
                </li>
                <li class="p-policy__list__item">その他法令に違反することとなる場合</li>
            </ol>

            <p class="p-policy__text"> 前項の定めにかかわらず、履歴情報および特性情報などの個人情報以外の情報については、原則として開示いたしません。</p>

            <p class="p-policy__text">
                個人情報の修正・削除などをご希望される場合には、本人であることを確認の上、対応します。</p>

            <h3 class="p-policy__title--sub">アクセス解析について</h3>
            <p class="p-policy__text">
                当サイトでは、Googleが提供するアクセス解析ツール「Googleアナリティクス」を使用しています。このGoogleアナリティクスはトラフィックデータの収集のためにCookieを使用していますが、そのトラフィックデータは匿名で収集されており、個人を特定するものではありません。</p>
            <p class="p-policy__text">
                この機能はCookieを無効にすることで収集を拒否することが出来ますので、お使いのブラウザの設定をご確認ください。この規約に関しての詳細はGoogleアナリティクスサービス利用規約のページをご覧ください。
            </p>

            <h3 class="p-policy__title--sub"></h3>
            <p class="p-policy__text">

            </p>

            <h3 class="p-policy__title--sub"></h3>
            <p class="p-policy__text">

            </p>

            <h3 class="p-policy__title--sub">プライバシーポリシーの変更</h3>
            <p class="p-policy__text">
                本ポリシーの内容は、法令その他本ポリシーに別段の定めのある事項を除いて、ユーザーに通知することなく、変更することができるものとします。</p>
            <p class="p-policy__text">
                当サイトが別途定める場合を除いて、変更後のプライバシーポリシーは、本ウェブサイトに掲載したときから効力を生じるものとします。
            </p>

            <h3 class="p-policy__title--sub">免責事項</h3>
            <p class="p-policy__text">
                当サイトの情報は、一部のサービスを除き、無料で提供されています。当サイトを利用したウェブサイトの閲覧や情報収集については、情報がユーザーの需要に適合するものか否か、情報の保存や複製その他ユーザーによる任意の利用方法により必要な法的権利を有しているか否か、著作権、秘密保持、名誉毀損、品位保持および輸出に関する法規その他法令上の義務に従うことなど、ユーザーご自身の責任において行っていただきますようお願いいたします。</p>
            <p class="p-policy__text">
                当サイトの御利用につき、何らかのトラブルや損失・損害等につきましては一切責任を問わないものとします。</p>
            <p class="p-policy__text">
                当サイトからリンクやバナーなどによって他のサイトに移動された場合、移動先サイトで提供される情報、サービス等について一切の責任を負いません。
            </p>

            <h3 class="p-policy__title--sub">お問い合わせ</h3>
            <p class="p-policy__text">
                当サイトの個人情報の取扱いに関するお問い合わせは<a href="/contact">お問い合わせフォーム</a>よりご連絡ください。
            </p>

        </div>
    </main>

    <footer-component></footer-component>
@endsection
