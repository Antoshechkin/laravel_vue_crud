import router from "../../router"

const state = {
    person: null,
    people: null
}

const getters = {
    person: () => state.person,
    people: () => state.people
}

const actions = {
    getPerson({commit}, id) {
        axios.get(`/api/people/${id}`)
            .then(res => {
                commit('setPerson', res.data.data)
            })
    },

    
    getPeople({commit}) {
        axios.get('/api/people')
        .then(res  => {
            commit('setPeople', res.data.data)
        })
    },

    deletePeople({dispatch}, id) {
        axios.delete(`/api/people/${id}`)
        .then(res  => {
            dispatch('getPeople')
        })
        .catch(err => {
            alert('Sorry oshibka...(')
            console.log(err.message);
        })
    },

    update({}, data) {
        axios.patch(`/api/people/${data.id}`, {name: data.name, age: data.age, job: data.job})
        .then(res  => {
            router.push({name: 'people.index'})
        })
        .catch(err => {
            alert('Sorry oshibka...(')
        })
    },

    store({}, data) {
        axios.post('/api/people/create', {name: data.name, age: data.age, job: data.job})
        .then( res => {
            router.push({name: 'people.index'})
        })
        .catch(err => {
            alert('Sorry oshibka...(')
        })
    }
}

const mutations = {
    setPerson(state, person) {
        state.person = person
    },
    
    setPeople(state, people) {
        state.people = people
    }
}

export default {
    state, mutations, getters, actions
}