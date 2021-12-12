<template>
  <div class="col-md-4" style="padding-left: 0 !important;">
    <div class="chat">
      <div class="chat-title">
        <h1>{{ user.name }}</h1>
        <h2>User</h2>
        <h2>{{ typing_user }}</h2>

        <figure class="avatar">
          <img
            :src="'https://ui-avatars.com/api/?name='+user.name+'&background=248A52&caps=3&bold=true'"
          />
        </figure>
      </div>
      <div class="messages" style="overflow-y: scroll; " v-chat-scroll="{always: true, smooth: true, scrollonremoved:true}" @v-chat-scroll-top-reached="getMessages">
        <div class="messages-content">
          <div  v-for="(msg, i) in messages" :key="i">
          <div v-if="user.id !== msg.user_id" class="message new">
            <figure class="avatar"><img :src="'https://ui-avatars.com/api/?name='+msg.user.name+'&background=257287&caps=3&bold=true'" /></figure>
            {{ msg.user.name }} : {{ msg.message }}
          </div>
          <div class="message message-personal" v-else> {{ msg.message }}</div>
          </div>
        </div>
      </div>
      <div class="message-box">
        <textarea
          type="text" v-model="chat.message"
          class="message-input"
          placeholder="Type message..."
        ></textarea>
        <button type="submit" @click.prevent="sendMessage" class="message-submit">Send</button>
      </div>
    </div>
    <div class="bg"></div>
  </div>
</template>

<script>
export default {
  name: "LiveChat",
  props: ["video", "user"],
  data() {
    return {
      chat: {
        message: "",
        user_id: this.user.id,
        video_id: this.video.id,
      },
      messages: [],
      typing_user: '',
    };
  },
  methods: {
      sendMessage(){
        if ($.trim(this.chat.message) == '') {
          return false;
        }
        axios.post('/api/chat/message', this.chat).then(res => {
          // console.log(res)
          this.getMessages()
          this.chat.message = "";
        }).catch(e => {
          console.log(e)
        });
      },
      getMessages(){
        axios.get('/api/chat/'+this.video.id+'/messages').then(res => {
          this.messages = res.data;
          setDate();
          console.log(res)
        }).catch(e => {
          console.log(e)
        });
      },
  },
  watch:{
    'chat.message': function(){
      Echo.private('live-chat-channel')
              .whisper('typing', {
                user: this.user.name,
                msg: this.chat.message,
              });
    }
  },
  mounted() {
    this.getMessages()
    console.log("Component mounted.");
  },
  created () {
    Echo.private('live-chat-channel').listen('LiveChatEvent', (e) => {
      if(e) {
        this.getMessages();
      }
      this.messages.push(e)
    }).listenForWhisper('typing', (e) => {
      if(e.msg != '') {
        this.typing_user = e.user+"'s typing...";
        $('.loading').remove();
        $('<div class="message loading new"><figure class="avatar"><img src="https://ui-avatars.com/api/?name=' + e.user + '&background=248A52&caps=3&bold=true" /></figure><span></span></div>').appendTo($('.messages-content'));

      }else{
        this.typing_user = ''
        $('.loading').remove();
      }
    });
    console.log('created');
  }
};
</script>
