const web = {
    nombre : 'deivip',
    links: {
        enlace: 'www.deivip.com'
    },
    socialmedia : {
        youtube : {
            enlace : 'www.youtube.com/deivip',
            nombre : 'deivipYT'
        },
        facebook: {
            enlace : 'www.facebooks.com/deivip',
            nombre : 'deivip FB'
        }
        
    }
}

const social_media_fb = web.socialmedia.facebook.enlace
console.log(social_media_fb)

const {enlace,nombre} = web.socialmedia.youtube
console.log(enlace, nombre)