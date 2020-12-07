<template>
    <div>
        <h3 v-html="$t('contact-us')"></h3>
        <p v-html="$t('contact-us-text')"></p>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input id="firstname" type="text" class="validate">
                        <label for="firstname">{{ $t('firstname') }}</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="lastname" type="text" class="validate">
                        <label for="lastname">{{ $t('lastname') }}</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input id="email" type="email" class="validate">
                        <label for="email">{{ $t('email') }}</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <select>
                            <option value="" disabled selected>{{ $t('choose-message-type') }}</option>
                            <option value="1">{{ $t('report-bug') }}</option>
                            <option value="2">{{ $t('make-complaint') }}</option>
                            <option value="3">{{ $t('request-callback') }}</option>
                            <option value="4">{{ $t('give-feedback') }}</option>
                            <option value="5">{{ $t('tech-support') }}</option>
                            <option value="6">{{ $t('get-quote') }}</option>
                            <option value="7">{{ $t('other') }}</option>
                        </select>
                        <label>{{ $t('message-type') }}</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="comments" class="materialize-textarea"></textarea>
                        <label for="comments">{{ $t('comments') }}</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <span class="smallprint" v-html="$t('contact-us-help')"></span>
                    </div>
                </div>
                <button class="btn waves-effect waves-light" type="button">
                    {{ $t('send') }}
                </button>
            </form>
        </div>
    </div>
</template>

<script>

</script>

<style>
.smallprint {
    font-size: 10px;
    color: #999999;
}
</style>