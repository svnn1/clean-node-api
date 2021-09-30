import { MongoHelper } from '../../infra/database/mongodb/helpers/mongo-helper'
import request from 'supertest'
import app from '../config/app'

describe('SignUp Routes', () => {
  beforeAll(async () => {
    await MongoHelper.connect(process.env.MONGO_URL)
  })

  afterAll(async () => {
    await MongoHelper.disconnect()
  })

  beforeEach(async () => {
    const accountCollection = MongoHelper.getCollection('accounts')

    await accountCollection.deleteMany({})
  })

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
