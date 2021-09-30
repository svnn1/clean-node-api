import request from 'supertest'
import app from '../config/app'

describe('SignUp Routes', () => {
  test('Should return an account on success', async () => {
    await request(app)
      .post('/signup')
      .send({
        name: 'Silvano Santana',
        email: 'silvano@mail.com',
        password: '12345',
        passwordConfirmation: '12345'
      })
      .expect(200)
  })
})
