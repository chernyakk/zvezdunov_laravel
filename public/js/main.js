function sender() {
    let contacts = [];
    let val = (document.getElementsByClassName('modal-call__input').length != 0) ?
        document.getElementsByClassName('modal-call__input') :
        document.getElementsByClassName('modal-call__input-non-verified');
    for(let now of val){
        if(now.name == 'name'){
            if(now.value){
                contacts.push(now.value);
            }
        }
        if(now.name == 'phone'){
            if(now.value){
            contacts.push(now.value);
            }
        }
    }
    function validator (contacts) {
        let now = new Date();
        if ((contacts[0] != undefined) && (contacts[1] != undefined)) {
            const text = 'Уважаемый менеджер! ' + now.getDate() + '.' + (now.getMonth() + 1) + '.' + now.getFullYear() + ' в ' +
                now.getHours() + ':' + now.getMinutes() + ' с сайта поступила заявка на проведение шоу. ' +
                'Просьба перезвонить клиенту и уточнить. Имя клиента: ' + contacts[0] +
                ', номер телефона: ' + contacts[1] + '.';
            const result = JSON.stringify(text);
            $.ajaxSetup({
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.post('/mailsend', {_token: $('meta[name="csrf-token"]').attr('content'), result}, function(data){
                let modalCall = {
                    self: $("#modalCall"),

                    showModalCall: function(content){
                        this.self.find("#innerModalCall").html(content);
                        this.self.fadeIn(200);
                        this.self.css("display","flex");
                        $('body').css("overflow","hidden");
                        $('body').removeClass('scrolled');
                    },

                    hideModalCall: function(){
                        this.self.fadeOut(200);
                        $('body').css("overflow","auto");
                        this.self.find("#innerModalCall").html('');
                    }
                };
                let content = $("#success").html();
                modalCall.showModalCall(content);
                $("#modalCall").on("click",function(e){
                    if($(e.target).attr("id") === "modalCall" || $(e.target).hasClass("closeModalCall")) {
                        modalCall.hideModalCall();
                    }
                    else {
                        return false;
                    }
                });
            });
        }
        else {
                $("#modalname").attr("class", "modal-call__input-non-verified");
                $("#modalphone").attr("class", "modal-call__input-non-verified");
                if (!document.getElementById("errormessage")) {
                let container = document.createElement('div');
                let please = document.getElementById('please');
                let errorspan = document.createElement('span');
                let errortext = document.createTextNode('Пожалуйста, заполните все поля');
                errorspan.className = "modal-call__error-text";
                errorspan.id = "errormessage"
                container.id = "errorspan";
                errorspan.append(errortext);
                container.appendChild(errorspan);
                please.after(container);
                }
                let modalCall = {
                    self: $("#modalCall"),

                    showModalCall: function(content){
                        this.self.find("#innerModalCall").html(content);
                        this.self.fadeIn(200);
                        this.self.css("display","flex");
                        $('body').css("overflow","hidden");
                        $('body').removeClass('scrolled');
                    },

                    hideModalCall: function(){
                        this.self.fadeOut(200);
                        $('body').css("overflow","auto");
                        this.self.find("#innerModalCall").html('');
                    }
            };
            let content = $("#cont").html();
            modalCall.showModalCall(content);
            $("#modalCall").on("click",function(e){
                if($(e.target).attr("id") === "modalCall" || $(e.target).hasClass("closeModalCall")) {
                    $("#errorspan").remove();
                    $("#modalname").attr("class", "modal-call__input");
                    $("#modalphone").attr("class", "modal-call__input");
                    modalCall.hideModalCall();
                }
                else {
                    return false;
                }
            });
        }
    }
    validator(contacts);
}
